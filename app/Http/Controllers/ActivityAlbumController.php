<?php

namespace App\Http\Controllers;

use App\Models\Activity_album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity_album = Activity_album::all();
        // return $lecturers;
        if (count($activity_album) > 0) {
            return view("admin/activities/album/index")->with('data_album', $activity_album);
        }
        return view("admin/activities/album/index")->with('data_album', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/activities/album/create");
        }else{
            return view("admin/activities/album/create_chin");
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image_th')){
                $filenameWithExt = $request->file('image_th')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_th')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_th')->storeAs('public/images/album',$fileNameToStore);

                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_image_th'=>$fileNameToStore,
                    'ac_desc_th'=>$request->desc_th,
                    'ac_name_ch'=>'',
                    'ac_image_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }else{
                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_desc_th'=>$request->desc_th,
                    'ac_image_th'=>'noimages.png',
                    'ac_name_ch'=>'',
                    'ac_image_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image_ch')){
                $filenameWithExt = $request->file('image_ch')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_ch')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_ch')->storeAs('public/images/album',$fileNameToStore);

                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_image_ch'=>$fileNameToStore,
                    'ac_desc_ch'=>$request->desc_ch,
                    'ac_name_ch'=>'',
                    'ac_image_ch'=>'',
                    'ac_desc_ch'=>''
                ];
            }else{
                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_desc_ch'=>$request->desc_ch,
                    'ac_image_ch'=>'noimages.png',
                    'ac_name_th'=>'',
                    'ac_image_th'=>'',
                    'ac_desc_th'=>''
                ];
            }
        }
        $album = Activity_album::create($prepareData);
        return view("album.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        // return $request;
        if($request->lang=='0'){
            return view("admin/activities/album/edit")->with('album_data', $request);
        }else{
            return view("admin/activities/album/edit_ch")->with('album_data', $request);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity_album $album_data)
    {

        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image_th')){
                $filenameWithExt = $request->file('image_th')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_th')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_th')->storeAs('public/images/album',$fileNameToStore);

                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_image_th'=>$fileNameToStore,
                    'ac_desc_th'=>$request->desc_th,
                ];
            }else{
                $prepareData=[
                    'ac_name_th'=>$request->subject_th,
                    'ac_desc_th'=>$request->desc_th,
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image_ch')){
                $filenameWithExt = $request->file('image_ch')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image_ch')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image_ch')->storeAs('public/images/album',$fileNameToStore);

                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_image_ch'=>$fileNameToStore,
                    'ac_desc_ch'=>$request->desc_ch,

                ];
            }else{
                $prepareData=[
                    'ac_name_ch'=>$request->subject_ch,
                    'ac_desc_ch'=>$request->desc_ch,
                ];
            }
        }
        $activity_update = Activity_album::find($request->id);
        $activity_update->update($prepareData);
        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $album_del = Activity_album::find($request->id);
        $album_del->delete();
        return redirect()->route('album.index');
    }
}
