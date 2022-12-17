<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Profit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ProfitTracker;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DevideProfitController extends Controller
{
    public function __construct()
    {
        set_time_limit(1200);
    }
    public function devideProfitForm()
    {
        $data = [
            'pageTitle' => 'Devide Profit',
            'plans' => Plan::where('status', 1)->get()
        ];
        return view('admin.devide_profit.devide', $data);
    }

    public function devide(Request $request)
    {
        $request->validate([
            'profit_percent' => 'required|numeric|min:0.01',
            'plan' => 'required',
        ]);

        $trx = getTrx();
        $users = User::where('status', 1)->where('plan_id', $request->plan)->get();

        foreach ($users as $user) {
            $userBalance = $user->balance;
            $profitPercentage = $request->profit_percent;

            // devide profit
            $profit = $userBalance*$profitPercentage/100;

            $user->current_profit += $profit;

            $user->save();

            $fprofit = new Profit;
            $fprofit->user_id = $user->id;
            $fprofit->plan_id = $user->plan_id;
            $fprofit->trx = $trx;
            $fprofit->percentage = $request->profit_percent;
            $fprofit->profit = $profit;

            $fprofit->save();

            $transaction = new Transaction;
            $transaction->user_id = $user->id;
            $transaction->amount = $profit;
            $transaction->charge = 0;
            $transaction->post_balance = $user->balance+$user->current_profit;
            $transaction->trx_type = '+';
            $transaction->trx = $trx;
            $transaction->details = 'Profit';
            $transaction->remark = 'Profit';

            $transaction->save();
        }

        $notify[] = ['success', 'Withdraw request sent successfully'];
        return back()->withNotify($notify);
    }

    public function addDailyProfitForm()
    {
        $data = [
            'pageTitle' => 'Add Daily Profit'
        ];
        return view('admin.devide_profit.add_daily_profit', $data);
    }

    public function dailyProfitSubmit()
    {
        DB::beginTransaction();
        $general = GeneralSetting::select('profit_bonus_percentage','profit_bonus_days')->first();
        // $profits = AddProfitToUser::whereDate('deposit_date','<=',Carbon::now()->subDays($general->profit_bonus_days))->where('status',0)->get();
        $users = User::with(['plan','refBy'])
            ->where('balance','>',0)
            ->where('status',1)
            ->where('last_withdraw','<=',Carbon::now()->subDays($general->profit_bonus_days))
            ->get();
        if($users){
            foreach($users as $user)
            {
                $amount = ($user->balance * $general->profit_bonus_percentage) / 100;
                $user->user_profit_bonus = $user->user_profit_bonus + $amount;
                $user->last_withdraw = Carbon::parse($user->last_withdraw)->addDays(1);

                // dd($user);
                $user->save();

                $transactions = [
                    'user_id' => $user->id,
                    'amount' => $amount,
                    'post_balance' => $user->balance,
                    'charge' => 0,
                    'trx_type' => '+',
                    'details' => '% profit bonus added',
                    'remark'=>'profit_bonus',
                    'trx' => getTrx(),
                ];
                // $transactions = Transaction::create($transactions);

                ProfitTracker::updateOrCreate([
                    'user_id' => $user->id,
                    'created_at' => \Carbon\Carbon::now()
                ],[
                    'transaction_id' => 1,
                    'amount' => $amount
                ]);
                levelCommission($user,  $amount , 'profit_bonus',  getTrx(),$user->plan->id);
            }
            DB::commit();
            $notify[] = ['success', count($users).' Profit Addedd Successfully'];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'No User to Add Profit'];
        return back()->withNotify($notify);
    }
}
