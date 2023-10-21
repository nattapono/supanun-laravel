<?php

namespace App\Http\Controllers;

use App\Models\Wisdom_type;
use Illuminate\Http\Request;

class WisdomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisdom = Wisdom_type::all();
        if (count($wisdom) > 0) {
            return view("admin/wisdomt/index")->with('wisdom_type_data', $wisdom);
        }
        return view("admin/wisdomt/index")->with('wisdom_type_data', '');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/wisdomt/create");
        }else{
            return view("admin/wisdomt/create_chin");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'type_name_th'=>$request->type_name,
                'type_name_ch'=>'',
            ];

        }else{ //ภาษาจีีน
            $prepareData=[
                'type_name_ch'=>$request->type_name,
                'type_name_th'=>'',
            ];
        }
        $wisdom_type = Wisdom_type::create($prepareData);
        return view("wisdom_type");
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisdom_type $wisdom_type)
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
            return view("admin/wisdomt/edit")->with('wisdom_type_data', $request);
        }else{
            return view("admin/wisdomt/edit_ch")->with('wisdom_type_data', $request);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisdom_type $wisdom_type)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'type_name_th'=>$request->type_name,
            ];
        }else{ //ภาษาจีีน
            $prepareData=[
                'type_name_ch'=>$request->type_name,
            ];
        }
        $wisdom_update = Wisdom_type::find($request->id);
        $wisdom_update->update($prepareData);
        return redirect()->route('wisdom_type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $wisdom_del = Wisdom_type::find($request->id);
        $wisdom_del->delete();
        return redirect()->route('wisdom_type.index');
    }
}
