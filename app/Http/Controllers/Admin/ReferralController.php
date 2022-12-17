<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Referral;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CommissionLog;
use DB;
class ReferralController extends Controller
{
    public function index()
    {
        $pageTitle = 'Referral Commissions';
        $referrals = Referral::with('plan')->get();
        $plans =Plan::where('status',1)->get();
        $commissionTypes = [
            'deposit_commission'=>'Deposit Commission',
            'profit_bonus'=>'Profit Bonus',
            'plan_subscribe_commission'=>'Plan Subscription',
            'ptc_view_commission'=>'PTC View',
        ];
        return view('admin.referral_setting',compact('pageTitle','referrals','commissionTypes','plans'));
    }

    public function status($type)
    {
        $general = GeneralSetting::first();
        if (@$general->$type == 1) {
            @$general->$type = 0;
        }else{
            @$general->$type = 1;
        }
        $general->save();
        $notify[] = ['success', 'Referral commission status updated successfully'];
        return back()->withNotify($notify);
    }

    public function update(Request $request)
    {
        $request->validate([
            'percent*' => 'required|numeric',
            'plan_id' => 'required|',
            'commission_type' => 'required|in:deposit_commission,plan_subscribe_commission,ptc_view_commission,profit_bonus',
        ]);
        $type = $request->commission_type;

        Referral::where('commission_type',$type)->where('plan_id',$request->plan_id)->delete();
        // dd($request->all());
        for ($i = 0; $i < count($request->percent); $i++){
            $referral = new Referral();
            $referral->level = $i + 1;
            $referral->plan_id = $request->plan_id;
            $referral->percent = $request->percent[$i];
            $referral->commission_type = $request->commission_type;
            $referral->save();
        }

        $notify[] = ['success','Referral commission setting updated successfully'];
        return back()->withNotify($notify);
    }
    public function changeReferral(User $user)
    {
        return view('admin.users.list-referrals', ['users' => $user->referrals()->paginate(getPaginate()), 'pageTitle' => 'Change Referrals']);
    }
    public function changeReferralStore(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'aam_id' => 'required',
                'curUser' => 'required'
            ]);
            $user = User::where('aam_id', $request->aam_id)->first(); // User with aam_id
            $toUser = User::where('id', $request->toUser)->first(); // User with Current User
            $fromUser = User::where('id', $request->curUser)->first(); // User with Current User
            if(!$user){
                $notify[] = ['error', 'No user find with this id'];
                return redirect()->back()->withNotify($notify);
            }
            $amount = CommissionLog::where('from_id', $user->id)->where('to_id', $request->curUser)->sum('amount');
            $fromUser->profit_bonus -= $amount;
            $fromUser->save();
            
            $toUser->ref_by = $user->id;
            $toUser->profit_bonus += $amount;
            $toUser->save();
            if($amount > 0){
                $transactions[] = [
                    'user_id' => $request->curUser,
                    'amount' => $amount,
                    'post_balance' => $fromUser->balance,
                    'charge' => 0,
                    'trx_type' => '-',
                    'details' =>  'Referral ID '.$request->aam_id.' Is changed to someone else',
                    'remark'=>'referral_commission',
                    'trx' => getTrx(),
                    'created_at'=>now()
                ];
                $transactions[] = [
                    'user_id' => $toUser->id,
                    'amount' => $amount,
                    'post_balance' => $toUser->balance,
                    'charge' => 0,
                    'trx_type' => '+',
                    'details' =>  'Referral ID '.$request->aam_id.' Is changed to you',
                    'remark'=>'referral_commission',
                    'trx' => getTrx(),
                    'created_at'=>now()
                ];
                Transaction::insert($transactions);
            }
            DB::commit();
            $notify[] = ['success', 'Referal Changed and balacne transfered'];
            return redirect()->back()->withNotify($notify);
        }catch(Exception $e){
            DB::rollback();
            return $e->getMessage();
        }
    }
}
