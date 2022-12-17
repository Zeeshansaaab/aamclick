<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Models\GeneralSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'Calender Daily Profit list',
            'calendars' => $this->calendarData()
        ];

        return view('admin.calendar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pageTitle' => 'Add Today Profit'
        ];

        return view('admin.calendar.create', $data);
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
            'profit' => 'required',
            'start_date' => 'required|date|date_format:Y-m-d'
        ]);
        // dd(Carbon::today()->format('Y-m-d'));
        // dd($request->start_date);
        // dd($request->all());
        $store = Calendar::updateOrCreate([
            'start' => $request->start_date ? $request->start_date : Carbon::today()->format('Y-m-d')
        ],[
            'title' => $request->profit,
            'start' => $request->start_date ? $request->start_date : Carbon::today()->format('Y-m-d')
        ]);

        if($request->start_date == Carbon::today()->format('Y-m-d')){
            GeneralSetting::updateOrCreate([
                    'id' => 1],
                    ['profit_bonus_percentage' => $request->profit,]);
        }

        $notify[] = ['success', 'Calendar Profit updated successfully'];

        return redirect()->route('admin.calendar.index')->withNotify($notify);
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
        $data = [
            'pageTitle' => 'Edit Calendar Profit',
            'calendar' => Calendar::findOrFail($id)
        ];

        return view('admin.calendar.edit', $data);
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
        $request->validate([
            'start_date' => 'required|date|date_format:Y-m-d',
            'profit' => 'required'
        ]);

        $update = Calendar::findOrFail($id);
        $update->start = $request->start_date;
        $update->title = $request->profit;
        $update->save();

        GeneralSetting::updateOrCreate([
                'id' => 1],
                ['profit_bonus_percentage' => $request->profit,]);

        $notify[] = ['success', 'Calendar Profit updated successfully'];

        return redirect()->route('admin.calendar.index')->withNotify($notify);
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

    protected function calendarData($scope = null)
    {
        if($scope)
        {
            $calendars = Calendar::$scope();
        } else {
            $calendars = Calendar::query();
        }

        //search
        $request = request();
        if ($request->search) {
            $search = $request->search;
            $plans  = $calendars->where(function ($calendar) use ($search) {
                            $calendar->where('start_date', 'like', "%$search%")
                                ->orWhere('title', 'like', "%$search%");
                      });
        }
        return $calendars->orderBy('id','desc')->paginate(getPaginate());
    }
}
