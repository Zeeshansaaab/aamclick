<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Committee;
use App\Models\CommitteeMember;
use App\Models\CommitteePlan;
use Carbon\Carbon;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'All Committee Plans',
            'plans' => $this->committeePlanData()
        ];

        return view('admin.committees.plans.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        if($request->id == 0){
            $plan = new CommitteePlan();
        }else{
            $plan = CommitteePlan::findOrFail($request->id);
        }

        $plan->name = $request->name;
        $plan->amount = $request->amount;
        $plan->status = isset($request->status) ? 1:0;
        $plan->save();

        $notify[] = ['success', 'Plan has been Updated Successfully.'];
        return back()->withNotify($notify);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $planid
     * @return \Illuminate\Http\Response
     */
    public function committeesIndex($planid)
    {
        $committeePlan = CommitteePlan::findOrFail($planid);

        $data = [
            'pageTitle' => 'All Committees',
            'committees' => Committee::where('committee_plan_id', $committeePlan->id)->orderBy('id','desc')->paginate(getPaginate())
        ];

        return view('admin.committees.committees.index', $data, compact('committeePlan'));
    }

    public function committeeCreate($planid)
    {
        $committeePlan = CommitteePlan::findOrFail($planid);

        $data = [
            'pageTitle' => 'Create Committee',
            'committee' => Committee::where('committee_plan_id',$committeePlan->id)
        ];

        return view('admin.committees.committees.create', $data, compact('committeePlan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function committeeStore(Request $request, $planid)
    {
        $committeePlan = CommitteePlan::findOrFail($planid);
        $commitee = Committee::where('committee_plan_id',$committeePlan->id)->first();

        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric|min:0',
            'validity' => 'required|min:0',
        ]);

        $committee = new Committee();
        $committee->committee_plan_id = $committeePlan->id;
        $committee->name = $request->name;
        $committee->amount = $request->amount;
        $committee->validity = $request->validity;
        $committee->amount_return = $request->amount_return;
        $committee->members = 0;
        $committee->status = isset($request->status) ? 1:0;
        $committee->committee_open_time = Carbon::parse($request->time)->format('Y-m-d H:i:s');
        $committee->save();

        $notify[] = ['success', 'Committee Plan has been Created Successfully.'];
        return back()->withNotify($notify);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function committeeEdit($planid, $id)
    {
        $committeePlan = CommitteePlan::findOrFail($planid);

        $data = [
            'pageTitle' => 'Edit Committee',
            'committee' => Committee::where('committee_plan_id',$committeePlan->id)->findOrFail($id)
        ];

        return view('admin.committees.committees.edit', $data, compact('committeePlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function committeeUpdate(Request $request, $planid, $id)
    {
        $committeePlan = CommitteePlan::findOrFail($planid);
        $committee = Committee::where('committee_plan_id',$committeePlan->id)->findOrFail($id);

        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric|min:0',
            'validity' => 'required|min:0',
        ]);

        $committee->committee_plan_id = $committeePlan->id;
        $committee->name = $request->name;
        $committee->amount = $request->amount;
        $committee->validity = $request->validity;
        $committee->amount_return = $request->amount_return;
        $committee->members = 0;
        $committee->status = isset($request->status) ? 1:0;
        $committee->committee_open_time = Carbon::parse($request->time)->format('Y-m-d H:i:s');
        $committee->save();

        $notify[] = ['success', 'Committee Plan has been Created Successfully.'];
        return back()->withNotify($notify);
    }

    public function committeeMembers()
    {
        $data = [
            'pageTitle' => 'All Committee Members',
            'committeeMembers' => $this->committeeMembersData()
        ];
        return view('admin.committees.committees.user.index', $data);
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

    protected function committeePlanData($scope = null){
        if ($scope) {
            $plans = CommitteePlan::$scope();
        }else{
            $plans = CommitteePlan::query();
        }

        //search
        $request = request();
        if ($request->search) {
            $search = $request->search;
            $plans  = $plans->where(function ($plan) use ($search) {
                            $plan->where('name', 'like', "%$search%")
                                ->orWhere('amount', 'like', "%$search%");
                      });
        }
        return $plans->orderBy('id','desc')->paginate(getPaginate());
    }

    protected function committeeData($scope = null){
        if ($scope) {
            $committees = Committee::$scope();
        }else{
            $committees = Committee::query();
        }

        //search
        $request = request();
        if ($request->search) {
            $search = $request->search;
            $committees  = $committees->where(function ($committee) use ($search) {
                            $committee->where('name', 'like', "%$search%")
                                ->orWhere('amount', 'like', "%$search%");
                      });
        }
        return $committees->orderBy('id','desc')->paginate(getPaginate());
    }

    protected function committeeMembersData($scope= null){
        $committeeMembers = CommitteeMember::orderByDesc('id');
        if(request()->input('search'))
        {
            $search = request()->search;
            $committeeMembers->whereHas('user',function($query) use ($search){
                $query->where('firstname','like', "%$search%")
                ->orWhere('lastname','like',"%$search%")
                ->orWhere('email','like',"%$search%")
                ->orWhere('aam_id','like',"%$search%");
            })
            ->orWhereHas('committee', function($query) use ($search){
                $query->where('name','like', "%$search%");
            });
        }
        return $committeeMembers->paginate(getPaginate());
    }


}
