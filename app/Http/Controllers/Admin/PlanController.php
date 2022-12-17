<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Referral;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $pageTitle = 'Subscription Plan';
        $levels = Referral::select('plan_id','level')->get();
        $plans = Plan::get();
        return view('admin.plan',compact('pageTitle','levels','plans'));
    }

    public function savePlan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|min:0',
            'min_profit_percent' => 'required|numeric|min:0',
            'max_profit_percent' => 'required|numeric|min:0',
            'profit_bonus_percent' => 'required|numeric|min:0',
            'validity' => 'required|min:0',
        ]);

        if($request->id == 0){
            $plan = new Plan();
        }else{
            $plan = Plan::findOrFail($request->id);
        }
        $plan->name = $request->name;
        $plan->min_price = $request->min_price;
        $plan->max_price = $request->max_price;
        $plan->min_profit_percent = $request->min_profit_percent;
        $plan->max_profit_percent = $request->max_profit_percent;
        $plan->profit_bonus_percent = $request->profit_bonus_percent;
        $plan->validity = $request->validity;
        $plan->amount_return = $request->ammount_return;
        $plan->status = isset($request->status) ? 1:0;
        $plan->save();

        $notify[] = ['success', 'Plan has been Updated Successfully.'];
        return back()->withNotify($notify);
    }
}
