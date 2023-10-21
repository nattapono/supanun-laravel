<?php

namespace App\Http\Controllers;

use App\Models\Wisdom;
use App\Models\Wisdom_type;
use Illuminate\Http\Request;

class WisdomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisdom = Wisdom::join('wisdom_types', 'wisdoms.type_id', '=', 'wisdom_types.id')
    ->select('wisdoms.*', 'wisdom_types.type_name_th as type_name_th','wisdom_types.type_name_ch as type_name_ch')
    ->get();
        if (count($wisdom) > 0) {
            return view("admin/wisdom/index")->with('wisdom_data', $wisdom);
        }
        return view("admin/wisdom/index")->with('wisdom_data', '');

    }
    public function wisdom()
    {
        $wisdom = Wisdom::all();

        if (count($wisdom) > 0) {
            return view("admin/wisdom/index")->with('wisdom_data', $wisdom);
        }
        return view("admin/wisdom/index")->with('wisdom_data', '');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $wisdom = Wisdom_type::all();
        if($request->lang=='0'){
            return view("admin/wisdom/create")->with('wisdom_type_data', $wisdom);
        }else{
            return view("admin/wisdom/create_chin")->with('wisdom_type_data', $wisdom);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'subject_th'=>$request->subject_th,
                'desc_th'=>$request->desc_th,
                'type_id'=>$request->type_id,
                'subject_ch'=>'',
                'desc_ch'=>'',
            ];

        }else{ //ภาษาจีีน
            $prepareData=[
                'subject_ch'=>$request->subject_th,
                'type_id'=>$request->type_id,
                'desc_ch'=>$request->desc_ch,
                'subject_th'=>'',
                'desc_th'=>'',
            ];
        }
        $wisdom = Wisdom::create($prepareData);
        return view("admin.wisdom.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(wisdom $wisdom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $wisdom_type = Wisdom_type::all();
        if($request->lang=='0'){
            return view("admin/wisdom/edit")->with(['wisdom_data' => $request, 'wisdom_type_data' => $wisdom_type]);
        }else{
            return view("admin/wisdom/edit_ch")->with(['wisdom_data' => $request, 'wisdom_type_data' => $wisdom_type]);

        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wisdom $wisdom)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'subject_th'=>$request->subject_th,
                'desc_th'=>$request->desc_th,
                'type_id'=>$request->type_id,
            ];
        }else{ //ภาษาจีีน
            $prepareData=[
                'subject_ch'=>$request->subject_ch,
                'desc_ch'=>$request->desc_ch,
                'type_id'=>$request->type_id,
            ];
        }
        $wisdom_update = Wisdom::find($request->id);
        $wisdom_update->update($prepareData);
        return redirect()->route('wisdom.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $wisdom_del = Wisdom::find($request->id);
        $wisdom_del->delete();
        return redirect()->route('wisdom.index');
    }
}
