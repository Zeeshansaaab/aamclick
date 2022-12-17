<?php

namespace App\Http\Controllers\User;

use PDO;
use App\Models\User;
use App\Models\Installment;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CommitteeInstallment;
use Carbon\Carbon;
use Exception;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('installments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [

            'pageTitle' => "Installments",

        ];
        return view($this->activeTemplate . 'user.installments.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'screenshot' => 'required',
                'address' => 'required',
            ]);
            $committees = Committee::whereHas('user', function($query){
                $query->where('users.id', auth()->user()->id);
            })->get();
            
            $balance = 0;
            foreach($committees as $valid){
                $installments = CommitteeInstallment::where('user_id', auth()->user()->id)->where('committee_id', $valid->committee->id)->where('status', 1)->select(DB::raw('count(*) as totalInstallments'))->first();
                if($valid->committee->validity > $installments->totalInstallments){
                    $balance += $valid->committee->amount;
                }
            }
            $totalBalanceForInstallment = (auth()->user()->balance - $balance) * 0.6;
            if($totalBalanceForInstallment < $request->input('amount')){
                return \redirect()->back()->withErrors('You balance is not enough');
            }
            DB::beginTransaction();
            if($request->has('screenshot')){
                $filename = auth()->user()->aam_id.Carbon::now()->toDateTimeLocalString();
                $request->file('screenshot')->storeAs('assets/images/installments/',$filename);
            }
            $request->merge(['user_id'=> auth()->user()->id]);
            // dd($request->all());
            $installments = Installment::create($request->all());
            $installments->user_id = auth()->user()->id;
            $installments->save();
            \auth()->user()->balance -= $request->amount;
            \auth()->user()->save();
            DB::commit();
            $notify[] = ['success', 'Your request submittes successfully!'];
            return \redirect()->back()->withNotify($notify);
        // }catch(Exception $e){
        //     DB::rollBack();
        //     return \redirect()->back()->withErrors($e->getMessage());
        // }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function show(Installment $installment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function edit(Installment $installment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Installment $installment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Installment  $installment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Installment $installment)
    {
        //
    }
}
