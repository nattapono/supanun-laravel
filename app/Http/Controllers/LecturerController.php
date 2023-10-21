<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        // return $lecturers;
        if (count($lecturers) > 0) {
            return view("admin/lecturer/index")->with('lecturers_data', $lecturers);
        }
        return view("admin/lecturer/index")->with('lecturers_data', 'details');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/lecturer/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/lecturer',$fileNameToStore);

                $prepareData=[
                    'image'=>$fileNameToStore,
                    'details_th'=>$request->details_th,
                ];
            }else{
                $prepareData=[
                    'details_th'=>$request->details_th,
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/lecturer',$fileNameToStore);

                $prepareData=[
                    'image'=>$fileNameToStore,
                    'details_ch'=>$request->details_ch,
                ];
            }else{
                $prepareData=[
                    'details_ch'=>$request->details_ch,
                ];
            }
        }

        $lecturer = Lecturer::create($prepareData);
        return redirect()->route('lecturer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/lecturer/edit")->with('lecturer_data' ,$request);
        }else{
            return view("admin/lecturer/edit_ch")->with('lecturer_data' ,$request);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/lecturer',$fileNameToStore);

                $prepareData=[
                    'image'=>$fileNameToStore,
                    'details_th'=>$request->details_th,
                ];
            }else{
                $prepareData=[
                    'details_th'=>$request->details_th,
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/lecturer',$fileNameToStore);

                $prepareData=[
                    'image'=>$fileNameToStore,
                    'details_ch'=>$request->details_ch,
                ];
            }else{
                $prepareData=[
                    'details_ch'=>$request->details_ch,
                ];
            }
        }

        $lecturer_update = Lecturer::find($lecturer->id);
        $lecturer_update->update($prepareData);
        return redirect()->route('lecturer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        $album_del = Lecturer::find($lecturer->id);
        $album_del->delete();
        return redirect()->route('lecturer.index');
    }
}
