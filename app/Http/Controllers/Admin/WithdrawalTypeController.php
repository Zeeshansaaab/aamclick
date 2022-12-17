<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WithdrawalType;
use Carbon\Carbon;

class WithdrawalTypeController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Withdrawal Types',
            'types' => WithdrawalType::get(),
        ];
        return view('admin.withdrawal_types.index', $data);
    }

    public function create()
    {
        $data = [
            'pageTitle' => 'Create Withdrawal Types',
            'types' => WithdrawalType::get()
        ];
        
        return view('admin.withdrawal_types.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'typekey' => 'required',
            'can_withdraw_in' => 'required|numeric|min:0',
        ]);

        $create = new WithdrawalType;
        $create->type = $request->type;
        $create->typekey = $request->typekey;
        $create->can_withdraw_in = $request->can_withdraw_in;
        $create->status = $request->status;

        //dd($create);

        $create->save();
        
        $notify[] = ['success', 'Withdraw type created successfully'];
        return redirect()->back()->withNotify($notify);
    }

    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Update Withdrawal Types',
            'type' => WithdrawalType::findOrFail($id),
            'types' => WithdrawalType::get()
        ];
        
        return view('admin.withdrawal_types.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'can_withdraw_in' => 'required|numeric|min:0',
        ]);

        $update = WithdrawalType::findOrFail($id);
        $update->type = $request->type;
        $update->can_withdraw_in = $request->can_withdraw_in;
        $update->status = $request->status;
        $update->updated_at = Carbon::now();

        //dd($update);

        $update->save();
        
        $notify[] = ['success', 'Withdraw type updated successfully'];
        return redirect()->back()->withNotify($notify);
    }

    function activate($id)
    {
        $method = WithdrawalType::findOrFail($id);
        $method->status = 1;
        $method->save();
        $notify[] = ['success', 'Withdraw types activated successfully'];
        return to_route('admin.withdrawType.index')->withNotify($notify);
    }

    function deactivate($id)
    {
        $method = WithdrawalType::findOrFail($id);
        $method->status = 2;
        $method->save();
        $notify[] = ['success', 'Withdraw types deactivated successfully'];
        return to_route('admin.withdrawType.index')->withNotify($notify);
    }
}
