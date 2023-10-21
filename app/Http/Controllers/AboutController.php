<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        // return count($about);
        if (count($about) > 0) {
            return view("admin/about/index")->with('about_data', $about);
        }
        return view("admin/about/index")->with('about_data', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $about = About::all();
        if($request->lang=='0'){
            return view("admin/about/create")->with('about_data', $about);
        }else{
            return view("admin/about/create_chin")->with('about_data', $about);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'description_th'=>$request->description_th,
                'description_ch'=>'',
            ];

        }else{ //ภาษาจีีน
            $prepareData=[
                'description_ch'=>$request->description_ch,
                'description_th'=>'',
            ];
        }
        $about = About::create($prepareData);
        return view('admin.about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/about/edit")->with('about_data' ,$request);
        }else{
            return view("admin/about/edit_ch")->with('about_data' ,$request);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'description_th'=>$request->description_th,
            ];
        }else{ //ภาษาจีีน
            $prepareData=[
                'description_ch'=>$request->description_ch,
            ];
        }
        $about_update = About::find($about->id);
        $about_update->update($prepareData);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        $about_del = About::find($about->id);
        $about_del->delete();
        return redirect()->route('about.index');
    }
}
