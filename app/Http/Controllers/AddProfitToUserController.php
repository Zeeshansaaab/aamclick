<?php

namespace App\Http\Controllers;
use App\Models\GeneralSetting;
use App\Models\AddProfitToUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
class AddProfitToUserController extends Controller
{
  
   public function index(){  
      
       dd(Hash::make('Abdul4444'));
    $general = GeneralSetting::select('profit_bonus_percentage','profit_bonus_days')->first();
    // $profits = AddProfitToUser::whereDate('deposit_date','<=',Carbon::now()->subDays($general->profit_bonus_days))->where('status',0)->get();
    $users = \App\Models\User::with(['plan','refBy'])->where('balance','>',0)->where('status',1)->where('last_withdraw','<=',Carbon::now()->subDays($general->profit_bonus_days))->get();
    if($users){        
        foreach($users as $user)
        {
            // $profit->status = 1;
            // $profit->save();
            $amount = ($user->balance * $general->profit_bonus_percentage) / 100;
            $user->user_profit_bonus = $user->user_profit_bonus + $amount;
            // $user->last_withdraw = Carbon::now();
            // dd($user);
            $user->save();
            levelCommission($user,  $amount , 'profit_bonus',  getTrx(),$user->plan->id);
        }
    }
    // if($profits){
        
    //     foreach($profits as $profit)
    //     {
            
    //         // $profit->status = 1;
    //         $profit->save();
    //         $amount = ($profit->user->balance * $general->deposit_profit) / 100;
    //         $profit->user->balance = $profit->user->balance + $amount;
    //         $profit->user->save();
    //         levelCommission($profit->user,  $amount , 'profit_bonus',  getTrx(),$profit->user->plan->id);
    //     }
    // }

    $notify[] = ['success', 'Profit Bonus Addedd Successfully'];
   }
}
