<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Transaction;
use App\Models\ProfitTracker;
use App\Models\GeneralSetting;
use Illuminate\Support\Carbon;
use App\Models\AddProfitToUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class AutoApproveProfit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'approve:profit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      
        $general = GeneralSetting::select('profit_bonus_percentage','profit_bonus_days')->first();
        // $profits = AddProfitToUser::whereDate('deposit_date','<=',Carbon::now()->subDays($general->profit_bonus_days))->where('status',0)->get();
        $users = \App\Models\User::with(['plan','refBy'])->where('balance','>',0)->where('status',1)->where('last_withdraw','<=',Carbon::now()->subDays($general->profit_bonus_days))->get();
        if($users){        
            foreach($users as $user)
            {
                $amount = ($user->balance * $general->profit_bonus_percentage) / 100;
                $user->user_profit_bonus = $user->user_profit_bonus + $amount;
                $user->last_withdraw = Carbon::now();
                
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
                    'created_at'=> \Carbon\Carbon::now()
                ];
                $transactions = Transaction::create($transactions);
                
                ProfitTracker::updateOrCreate([
                    'user_id' => $user->id,
                    'created_at' => \Carbon\Carbon::now()
                ],[
                    'transaction_id' => $transactions->id,
                    'amount' => $amount
                ]);

                levelCommission($user,  $amount , 'profit_bonus',  getTrx(),$user->plan->id);
            }
            Log::info(count($users)."Profit Addedd Successfully");
            echo count($users)."Profit Addedd Successfully";
        }
        Log::info("No User to Add Profit");
        echo "No User to Add Profit";
    }
}
