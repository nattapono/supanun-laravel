<?php

namespace App\Http\Controllers;

use App\Models\Termsofuse;
use Illuminate\Http\Request;

class TermsofuseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $termsofuse = Termsofuse::all();
        // return $setting;
        if (count($termsofuse) > 0) {
            return view("admin/termsofuse/index")->with('data_terms', $termsofuse);
        }
        return view("admin/termsofuse/index")->with('data_terms', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            if($request->lang==0){
                $prepareData=[
                    'desc_th'=>$request->desc,
                    'desc_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'desc_ch'=>$request->desc,
                    'desc_th'=>'',
                ];
            }
            $desc = Termsofuse::create($prepareData);
            return redirect()->route('termsofuse.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Termsofuse $termsofuse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Termsofuse $termsofuse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Termsofuse $termsofuse)
    {
        if($request->lang==0){
            $prepareData=[
                'desc_th'=>$request->desc,
            ];
        }else{
            $prepareData=[
                'desc_ch'=>$request->desc,
            ];
        }
        $desc = Termsofuse::find($request->id);
            $desc->update($prepareData);
            return redirect()->route('termsofuse.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Termsofuse $termsofuse)
    {
        //
    }
}
