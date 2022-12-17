<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfitTracker;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
class ProfitTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profits = ProfitTracker::with(['user','transaction'])->where(function($query){
        //         $query->whereHas('user', function($subQuery){
        //             if(request()->input('search') != null){
        //                 $subQuery->where('aam_id', request()->input('search'))
        //                 ->orWhere('firstname', 'LIKE', '%'.request()->input('search').'%')
        //                 ->orWhere('lastname', 'LIKE', '%'.request()->input('search').'%');
        //             }
        //             $subQuery->whereDate('last_withdraw', '<', Carbon::now())
        //             ->where('balance', '>', 0);
        //         });
        // })->orderBy('created_at', 'desc')->paginate(\getPaginate());

        $users = User::whereDate('last_withdraw', '<', Carbon::now())
                    ->where('balance', '>', 0)->paginate(getPaginate());
        $pageTitle = 'Profit Tracker';
        return view('admin.tracker.index', compact('users','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
