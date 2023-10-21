<?php

namespace App\Http\Controllers;

use App\Models\Activity_video;
use Illuminate\Http\Request;

class ActivityVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity_video = Activity_video::all();
        // return $lecturers;
        if (count($activity_video) > 0) {
            return view("admin/activities/video/index")->with('data_video', $activity_video);
        }
        return view("admin/activities/video/index")->with('data_video', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/activities/video/create");
        }else{
            return view("admin/activities/video/create_chin");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'video_file' => 'required|mimes:mp4,mov,avi', // ตรวจสอบไฟล์เป็น mp4, mov, หรือ avi
        // ]);

        // $video = new Video;
        // $video->title = $request->title;
        // $video->storeVideo($request->file('video_file'));

        // return redirect()->route('videos.index')->with('success', 'วิดีโอถูกบันทึกเรียบร้อยแล้ว');

        // return $request;
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image_th')){
                $filenameWithExt = $request->file('image_th')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_th')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_th')->storeAs('public/images/videos',$fileNameToStore);

                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_video_th'=>$fileNameToStore,
                    'ac_desc_th'=>$request->desc_th,
                    'ac_name_ch'=>'',
                    'ac_video_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }else{
                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_desc_th'=>$request->desc_th,
                    'ac_video_th'=>'noimages.png',
                    'ac_name_ch'=>'',
                    'ac_video_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image_ch')){
                $filenameWithExt = $request->file('image_ch')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_ch')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_ch')->storeAs('public/images/videos',$fileNameToStore);

                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_video_ch'=>$fileNameToStore,
                    'ac_desc_ch'=>$request->desc_ch,
                    'ac_name_ch'=>'',
                    'ac_video_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }else{
                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_desc_ch'=>$request->desc_ch,
                    'ac_video_ch'=>'noimage.png',
                    'ac_name_th'=>'',
                    'ac_video_th'=>'',
                    'ac_desc_th'=>''
                ];
            }
        }
        $video = Activity_video::create($prepareData);
        return view("videos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity_video $activity_video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/activities/video/edit")->with('video_data', $request);
        }else{
            return view("admin/activities/video/edit_ch")->with('video_data', $request);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity_video $activity_video)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image_th')){
                $filenameWithExt = $request->file('image_th')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_th')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_th')->storeAs('public/images/videos',$fileNameToStore);

                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_video_th'=>$fileNameToStore,
                    'ac_desc_th'=>$request->desc_th
                ];
            }else{
                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_desc_th'=>$request->desc_th
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image_ch')){
                $filenameWithExt = $request->file('image_ch')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_ch')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_ch')->storeAs('public/images/videos',$fileNameToStore);

                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_video_ch'=>$fileNameToStore,
                    'ac_desc_ch'=>$request->desc_ch,
                ];
            }else{
                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_desc_ch'=>$request->desc_ch,
                ];
            }
        }
        $activity_update = Activity_video::find($request->id);
        $activity_update->update($prepareData);
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $video_del = Activity_video::find($request->id);
        $video_del->delete();
        return redirect()->route('videos.index');
    }
}
