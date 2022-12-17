<?php

namespace App\Jobs;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Transaction;
use App\Models\ProfitTracker;
use Illuminate\Bus\Queueable;
use App\Models\GeneralSetting;
use App\Models\AddProfitToUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Artisan;

class AddProfitJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            DB::beginTransaction();
            $general = GeneralSetting::select('profit_bonus_percentage','profit_bonus_days')->first();
            // $profits = AddProfitToUser::whereDate('deposit_date','<=',Carbon::now()->subDays($general->profit_bonus_days))->where('status',0)->get();
            $users = User::with(['plan','refBy'])
                ->where('balance','>',0)
                ->where('status',1)
                ->where('last_withdraw','<=',Carbon::now()->subDays($general->profit_bonus_days))
                ->take(50)->get();
            if($users){
                foreach($users as $user)
                {
                    $amount = ($user->balance * $general->profit_bonus_percentage) / 100;
                    $user->user_profit_bonus = $user->user_profit_bonus + $amount;
                    $user->last_withdraw = Carbon::parse($user->last_withdraw)->addDays(1);

                    // dd($user);
                    $user->save();

                    $transactions[] = [
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

                    ProfitTracker::updateOrCreate([
                        'user_id' => $user->id,
                        'created_at' => \Carbon\Carbon::now()
                    ],[
                        'transaction_id' => 1,
                        'amount' => $amount
                    ],
                    [
                        'user_id' => $user->id,
                        'created_at' => \Carbon\Carbon::now()
                    ],[
                        'transaction_id' => 1,
                        'amount' => $amount
                    ]);
                    levelCommission($user,  $amount , 'profit_bonus',  getTrx(),$user->plan->id);
                }
                Transaction::insert($transactions);
                DB::commit();
                Log::info("Success");
                Artisan::call('queue:reset');
            }
        }catch(Exception $e){
            DB::rollback();
            Log::info($e->getMessage());
        }
    }
}
