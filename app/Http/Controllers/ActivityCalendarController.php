<?php

namespace App\Http\Controllers;

use App\Models\Activity_calendar;
use Illuminate\Http\Request;

class ActivityCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity_calendar = Activity_calendar::all();
        // return $lecturers;
        if (count($activity_calendar) > 0) {
            return view("admin/activities/calendar/index")->with('data_calendar', $activity_calendar);
        }
        return view("admin/activities/calendar/index")->with('data_calendar', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/activities/calendar/create");
        }else{
            return view("admin/activities/calendar/create_chin");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย

                $prepareData=[
                    'ac_day'=>$request->ac_date,
                    'ac_name_th'=>$request->subject,
                    'ac_desc_th'=>$request->desc,
                    'ac_name_ch'=>'',
                    'ac_desc_ch'=>''
                ];

        }else{ //ภาษาจีีน

                $prepareData=[
                    'ac_day'=>$request->ac_date,
                    'ac_name_ch'=>$request->subject,
                    'ac_desc_ch'=>$request->desc,
                    'ac_name_th'=>'',
                    'ac_desc_th'=>''
                ];
        }
        $calendar = Activity_calendar::create($prepareData);
        return redirect()->route('calendar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity_calendar $activity_calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/activities/calendar/edit")->with('calendar_data', $request);
        }else{
            return view("admin/activities/calendar/edit_ch")->with('calendar_data', $request);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity_calendar $activity_calendar)
    {
        if($request->_lang == '0'){ //ภาษาไทย

            $prepareData=[
                'ac_day'=>$request->ac_date,
                'ac_name_th'=>$request->subject,
                'ac_desc_th'=>$request->desc,
            ];

        }else{ //ภาษาจีีน

            $prepareData=[
                'ac_day'=>$request->ac_date,
                'ac_name_ch'=>$request->subject,
                'ac_desc_ch'=>$request->desc,
            ];
        }
        $activity_update = Activity_calendar::find($request->id);
        $activity_update->update($prepareData);
        return redirect()->route('calendar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $calendar_del = Activity_calendar::find($request->id);
        $calendar_del->delete();
        return redirect()->route('calendar.index');
    }
}
