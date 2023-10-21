<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity_video =Video::all();
        // return $lecturers;
        if (count($activity_video) > 0) {
            return view("admin/activities/video/index")->with('data_video', $activity_video);
        }
        return view("admin/activities/video/index")->with('data_video', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return '1111';
        return view("admin/activities/video/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         return '1111';
    }

    /**
     * Display the specified resource.
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
