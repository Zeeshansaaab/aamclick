<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Lib\FormProcessor;
use App\Lib\GoogleAuthenticator;
use App\Models\CommissionLog;
use App\Models\CommitteePlan;
use App\Models\Committee;
use App\Models\CommitteeMember;
use App\Models\Form;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $pageTitle = 'Dashboard';

        // $chart['click'] = $ptc->groupBy('view_date')->map(function ($item,$key) {
        //     return collect($item)->count();
        // })->sort()->reverse()->take(7)->toArray();

        // $chart['amount'] = $ptc->groupBy('vdt')->map(function ($item,$key) {
        //     return collect($item)->sum('amount');
        // })->sort()->reverse()->take(7)->toArray();
        // 6033  6035    6084

        $this->checkPlan();

        $teamMembers = teamMembers();
        $totalAmount = auth()->user()->committees()->sum('amount');   
        return view($this->activeTemplate . 'user.dashboard', compact('pageTitle','teamMembers', 'totalAmount'));
    }

    public function depositHistory(Request $request)
    {
        $pageTitle = 'Deposit History';
        $deposits = auth()->user()->deposits();
        if ($request->search) {
            $deposits = $deposits->where('trx',$request->search);
        }
        $deposits = $deposits->with(['gateway'])->orderBy('id','desc')->paginate(getPaginate());
        return view($this->activeTemplate.'user.deposit_history', compact('pageTitle', 'deposits'));
    }

    public function show2faForm()
    {
        $general = GeneralSetting::first();
        $ga = new GoogleAuthenticator();
        $user = auth()->user();
        $secret = $ga->createSecret();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl($user->aam_id . '@' . $general->site_name, $secret);
        $pageTitle = '2FA Setting';
        return view($this->activeTemplate.'user.twofactor', compact('pageTitle', 'secret', 'qrCodeUrl'));
    }

    public function create2fa(Request $request)
    {
        $user = auth()->user();
        $this->validate($request, [
            'key' => 'required',
            'code' => 'required',
        ]);
        $response = verifyG2fa($user,$request->code,$request->key);
        if ($response) {
            $user->tsc = $request->key;
            $user->ts = 1;
            $user->save();
            $notify[] = ['success', 'Google authenticator activated successfully'];
            return back()->withNotify($notify);
        } else {
            $notify[] = ['error', 'Wrong verification code'];
            return back()->withNotify($notify);
        }
    }

    public function disable2fa(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
        ]);

        $user = auth()->user();
        $response = verifyG2fa($user,$request->code);
        if ($response) {
            $user->tsc = null;
            $user->ts = 0;
            $user->save();
            $notify[] = ['success', 'Two factor authenticator deactivated successfully'];
        } else {
            $notify[] = ['error', 'Wrong verification code'];
        }
        return back()->withNotify($notify);
    }

    public function transactions(Request $request)
    {
        $pageTitle = 'Transactions';
        $remarks = Transaction::distinct('remark')->orderBy('remark')->get('remark');
        $transactions = Transaction::where('user_id',auth()->id());

        if ($request->search) {
            $transactions = $transactions->where('trx',$request->search);
        }

        if ($request->type) {
            $transactions = $transactions->where('trx_type',$request->type);
        }

        if ($request->remark) {
            $transactions = $transactions->where('remark',$request->remark);
        }

        $transactions = $transactions->orderBy('id','desc')->paginate(getPaginate());
        return view($this->activeTemplate.'user.transactions', compact('pageTitle','transactions','remarks'));
    }

    public function kycForm()
    {
        if (auth()->user()->kv == 2) {
            $notify[] = ['error','Your KYC is under review'];
            return to_route('user.home')->withNotify($notify);
        }
        if (auth()->user()->kv == 1) {
            $notify[] = ['error','You are already KYC verified'];
            return to_route('user.home')->withNotify($notify);
        }
        $pageTitle = 'KYC Form';
        $form = Form::where('act','kyc')->first();
        return view($this->activeTemplate.'user.kyc.form', compact('pageTitle','form'));
    }

    public function kycData()
    {
        $user = auth()->user();
        $pageTitle = 'KYC Data';
        return view($this->activeTemplate.'user.kyc.info', compact('pageTitle','user'));
    }

    public function kycSubmit(Request $request)
    {
        $form = Form::where('act','kyc')->first();
        $formData = $form->form_data;
        $formProcessor = new FormProcessor();
        $validationRule = $formProcessor->valueValidation($formData);
        $request->validate($validationRule);
        $userData = $formProcessor->processFormData($request, $formData);
        $user = auth()->user();
        $user->kyc_data = $userData;
        $user->kv = 2;
        $user->save();

        $notify[] = ['success','KYC data submitted successfully'];
        return to_route('user.home')->withNotify($notify);

    }

    public function attachmentDownload($fileHash)
    {
        $filePath = decrypt($fileHash);
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $general = GeneralSetting::first();
        $title = slug($general->site_name).'- attachments.'.$extension;
        $mimetype = mime_content_type($filePath);
        header('Content-Disposition: attachment; filename="' . $title);
        header("Content-Type: " . $mimetype);
        return readfile($filePath);
    }

    public function userData()
    {
        $user = auth()->user();
        if ($user->reg_step == 1) {
            return to_route('user.home');
        }
        $pageTitle = 'User Data';
        return view($this->activeTemplate.'user.user_data', compact('pageTitle','user'));
    }

    public function userDataSubmit(Request $request)
    {
        $user = auth()->user();
        if ($user->reg_step == 1) {
            return to_route('user.home');
        }
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
        ]);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->address = [
            'country'=>@$user->address->country,
            'address'=>$request->address,
            'state'=>$request->state,
            'zip'=>$request->zip,
            'city'=>$request->city,
        ];
        $user->reg_step = 1;
        $user->save();

        $notify[] = ['success','Registration process completed successfully'];
        return to_route('user.home')->withNotify($notify);

    }

    public function buyPlan(Request $request){
        $request->validate([
            'id'=>'required'
        ]);

        $plan = Plan::where('status',1)->findOrFail($request->id);
        $user = auth()->user();

        if($plan->min_price > $user->balance){
            $notify[] = ['error','Oops! You\'ve no sufficient balance'];
            return back()->withNotify($notify);
        }

        $user->expire_date = now()->addDays($plan->validity);
        $user->plan_id = $plan->id;
        $user->save();

        $trx = getTrx();
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->amount = $plan->min_price;
        $transaction->post_balance = $user->balance;
        $transaction->charge = 0;
        $transaction->trx_type = '-';
        $transaction->details = 'Subscribe '.$plan->name.' Plan';
        $transaction->trx = $trx;
        $transaction->remark = 'subscribe_plan';
        $transaction->save();

        levelCommission($user, $plan->price, 'plan_subscribe_commission', $trx);


        notify($user, 'BUY_PLAN', [
            'plan_name' => $plan->name,
            'amount' => showAmount($plan->min_price),
            'trx' => $trx,
            'post_balance' => showAmount($user->balance)
        ]);

        $notify[] = ['success','You have subscribed to the plan successfully'];
        return back()->withNotify($notify);
    }


    public function commissions(Request $request){
        $pageTitle = "Commissions";
        $commissions = CommissionLog::where('to_id',auth()->id());

        if ($request->search) {
            $search = request()->search;
            $commissions = $commissions->where(function ($q) use ($search) {
                $q->where('trx', 'like', "%$search%")->orWhereHas('userFrom', function ($user) use ($search) {
                    $user->where('aam_id', 'like', "%$search%");
                });
            });
        }

        if ($request->remark) {
            $commissions = $commissions->where('type',$request->remark);
        }
        if ($request->level) {
            $commissions = $commissions->where('level',$request->level);
        }

        $commissions = $commissions->with('userFrom')->paginate(getPaginate());
        $levels = Referral::max('level');
        return view($this->activeTemplate.'user.commissions',compact('pageTitle','commissions','levels'));
    }

    public function referredUsers(){
        $pageTitle = "Referred Users";
        $refUsers = User::where('ref_by',auth()->user()->id)->with('plan')->paginate(getPaginate());
        $user = auth()->user();
        return view($this->activeTemplate.'user.referred',compact('pageTitle','refUsers','user'));
    }

    public function transfer(){
        $pageTitle = 'Transfer Balance';
        $general = GeneralSetting::first();
        if ($general->balance_transfer == 0) {
            $notify[] = ['error','User balance transfer currently disabled'];
            return redirect()->route('user.home')->withNotify($notify);
        }
        return view($this->activeTemplate.'user.transfer_balance', compact('pageTitle'));
    }

    public function transferSubmit(Request $request)
    {
        $request->validate([
            'aam_id'=>'required',
            'amount'=>'required|numeric|gt:0',
        ]);

        $user = auth()->user();
        if ($user->aam_id == $request->aam_id) {
            $notify[] = ['error','You cannot send money to your won account'];
            return back()->withNotify($notify);
        }
        $receiver = User::where('aam_id',$request->aam_id)->first();
        if (!$receiver) {
            $notify[] = ['error','Receiver not found'];
            return back()->withNotify($notify);
        }

        $general = GeneralSetting::first();
        $charge =  $general->bt_fixed + ( $request->amount * $general->bt_percent ) / 100;
        $afterCharge = $request->amount + $charge;

        $transferableBalance = $user->profit_bonus + $user->user_profit_bonus + $user->deposit_commission;

        if ($transferableBalance < $afterCharge) {
            $notify[] = ['error','You have no sufficient balance'];
            return back()->withNotify($notify);
        }

        if($user->profit_bonus >= $afterCharge){
            $user->profit_bonus -= $afterCharge;
        }
        elseif($user->profit_bonus+$user->user_profit_bonus >= $afterCharge){
            $afterCharge -= $user->profit_bonus;
            $user->profit_bonus = 0;
            $user->user_profit_bonus -= $afterCharge;
        }
        else
        {
            $afterCharge -= $user->profit_bonus;
            $afterCharge -= $user->user_profit_bonus;
            $user->profit_bonus = 0;
            $user->user_profit_bonus = 0;
            $user->deposit_commission -= $afterCharge;
        }

        // $user->balance -= $afterCharge;
        $user->save();

        $trx = getTrx();

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->amount = getAmount($afterCharge);
        $transaction->charge = $charge;
        $transaction->trx_type = '-';
        $transaction->trx = $trx;
        $transaction->details = 'Balance transfer to ' . $receiver->aam_id;
        $transaction->remark = 'balance_transfer';
        $transaction->post_balance = getAmount($user->balance);
        $transaction->save();

        $receiver->balance += $request->amount;
        $receiver->save();


        $transaction = new Transaction();
        $transaction->user_id = $receiver->id;
        $transaction->amount = getAmount($request->amount);
        $transaction->charge = 0;
        $transaction->trx_type = '+';
        $transaction->trx = $trx;
        $transaction->details = 'Balance received from ' . $user->aam_id;
        $transaction->remark = 'balance_received';
        $transaction->post_balance = getAmount($user->balance);
        $transaction->save();


        notify($user, 'BALANCE_TRANSFER', [
            'amount'=>$request->amount,
            'charge'=>$charge,
            'afterCharge'=>$afterCharge,
            'post_balance'=>$user->balance,
            'receiver'=>$receiver->aam_id,
            'trx'=>$trx,
        ]);


        notify($user, 'BALANCE_RECEIVE', [
            'amount'=>$request->amount,
            'post_balance'=>$user->balance,
            'sender'=>$user->aam_id,
            'trx'=>$trx,
        ]);


        $notify[] = ['success','Balance transferred successfully'];
        return back()->withNotify($notify);
    }

    public function checkPlan()
    {
        if(auth()->user()->balance > auth()->user()->plan->max_price){
            $plans = Plan::select('id','max_price','min_price')
                        ->where('status',1)
                        ->where('id','!=',auth()->user()->plan_id)
                        ->get();

            foreach($plans as $plan)
            {
               if(auth()->user()->balance >= $plan->min_price &&
                    auth()->user()->balance <= $plan->max_price)
                {
                    auth()->user()->plan_id =  auth()->user()->plan_id+1;
                    auth()->user()->save();
                    break;
                }
            }
        }
    }

    public function committeeMembers($complanid, $committeeid)
    {
        $committeePlan = CommitteePlan::findOrFail($complanid);
        $committee = Committee::where('committee_plan_id', $committeePlan->id)->findOrFail($committeeid);

        if(\Carbon\Carbon::now() < $committee->committee_open_time || $committee->committee_open_time == null || $committee->committee_open_time == '') {
            $data = [
                'pageTitle' => 'Committee Members',
                'committeePlan' => $committeePlan,
                'committee' => $committee
            ];

            return view($this->activeTemplate . 'user.committee.timer', $data);
        } else {
            $data = [
                'pageTitle' => 'Committee Members',
                'committeeMembers' => CommitteeMember::where('committee_id',$committee->id)->pluck('committee_number')->toArray(),
                'committeeMember' => CommitteeMember::where('user_id',auth()->user()->id)->where('committee_id',$committee->id)->first(),
                'committeePlan' => $committeePlan,
                'committee' => $committee,
                'isfull' => CommitteeMember::where('committee_id',$committee->id)->where('status',1)->count('id') + 1 == $committee->validity,
            ];
            // dd($data['isfull']);
            return view($this->activeTemplate . 'user.committee.members', $data);
        }
    }

    public function addCommitteeMember(Request $request)
    {
        $request->validate([
            'committeeId'=> 'required|int',
            'committeeNumber'=> 'required | int'
        ]);
        $taken = CommitteeMember::where('committee_id',$request->committeeId)->where('committee_number',$request->committeeNumber)->get();
        if(count($taken) > 0){
            return response()->json(['message'=>'Commitee is already taken']);
        }
        $taken = CommitteeMember::where('committee_id',$request->committeeId)->where('user_id',auth()->user()->id)->get();
        if(count($taken) > 0){
            // $notify[] = ['error','You are already a member in this committee'];
            // return response()->json($notify,201);
            return response()->json(
                ['message'=>'You are already a member in this committee',
                    'status'=>'error    '
                ],201);
        }
        $balance = Committee::find($request->committeeId)->amount > auth()->user()->balance;
        if($balance){
            return response()->json(['message'=>"Not Enough Balance"]);
        }

        $committes = CommitteeMember::where('user_id',auth()->user()->id)->get();
        $totalCommitteeAmount = 0;

        foreach($committes as $committee)
        {
            $totalCommitteeAmount += $committee->committee->amount;
        }

        if(auth()->user()->balance < $totalCommitteeAmount){
            return response()->json(['message'=>"Not Enough Balance for your committiess"]);
        }

        if($request->committeeNumber == 1){
            return response()->json(['message'=>'Can\'t select this committee.']);
        }

        $committeeMember = new CommitteeMember();
        $committeeMember->user_id = auth()->user()->id;
        $committeeMember->committee_id = $request->committeeId;
        $committeeMember->committee_number = $request->committeeNumber;
        $committeeMember->status = 0;
        $committeeMember->save();
        $committeeMember->committee->members +=1;
        $committeeMember->committee->save();
        return response()->json(['message'=>"You have subscribed for this committee"]);

    }

    public function committeeHistory()
    {
        $data = [
            'pageTitle' => 'Committee Report Status',
            'committees' => CommitteeMember::where('user_id',auth()->user()->id)->paginate(20)
        ];
        return view($this->activeTemplate.'user.committee.history',$data);
    }
}
