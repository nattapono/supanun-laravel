<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::all();
        // return $setting;
        if (count($setting) > 0) {
            return view("admin/setting/index")->with('data_setting', $setting);
        }
        return view("admin/setting/index")->with('data_setting', '');
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
        if(isset($request->link)){
            if($request->lang==0){
                $prepareData=[
                    'link_th'=>$request->link,
                    'link_ch'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_zodiac_th'=>'',
                    'text_zodiac_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'link_ch'=>$request->link,
                    'link_th'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_zodiac_th'=>'',
                    'text_zodiac_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }
            $link = Setting::create($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->description)){
            if($request->lang==0){
                $prepareData=[
                    'description_th'=>$request->description,
                    'description_ch'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'text_zodiac_th'=>'',
                    'text_zodiac_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'description_ch'=>$request->description,
                    'description_th'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'text_zodiac_th'=>'',
                    'text_zodiac_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }
            $description = Setting::create($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->text_zodiac)){
            if($request->lang==0){
                $prepareData=[
                    'text_zodiac_th'=>$request->text_zodiac,
                    'text_zodiac_ch'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'text_zodiac_ch'=>$request->text_zodiac,
                    'text_zodiac_th'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_service_th'=>'',
                    'text_service_ch'=>'',
                ];
            }
            $text_zodiac = Setting::create($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->text_service)){
            if($request->lang==0){
                $prepareData=[
                    'text_service_th'=>$request->text_service,
                    'text_service_ch'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_zodiac_ch'=>'',
                    'text_zodiac_th'=>'',
                ];
            }else{
                $prepareData=[
                    'text_service_ch'=>$request->text_service,
                    'text_service_th'=>'',
                    'link_ch'=>'',
                    'link_th'=>'',
                    'description_th'=>'',
                    'description_ch'=>'',
                    'text_zodiac_ch'=>'',
                    'text_zodiac_th'=>'',
                ];
            }
            $text_service = Setting::create($prepareData);
            return redirect()->route('setting.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        if(isset($request->link)){
            if($request->lang==0){
                $prepareData=[
                    'link_th'=>$request->link,
                    'link_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'link_ch'=>$request->link,
                    'link_th'=>'',
                ];
            }
            $link = Setting::find($request->id);
            $link->update($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->description)){
            if($request->lang==0){
                $prepareData=[
                    'description_th'=>$request->description,
                    'description_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'description_ch'=>$request->description,
                    'description_th'=>'',
                ];
            }
            $link = Setting::find($request->id);
            $link->update($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->text_zodiac)){
            if($request->lang==0){
                $prepareData=[
                    'text_zodiac_th'=>$request->text_zodiac,
                    'text_zodiac_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'text_zodiac_ch'=>$request->text_zodiac,
                    'text_zodiac_th'=>'',
                ];
            }
            $link = Setting::find($request->id);
            $link->update($prepareData);
            return redirect()->route('setting.index');
        }
        if(isset($request->text_service)){
            if($request->lang==0){
                $prepareData=[
                    'text_service_th'=>$request->text_service,
                    'text_service_ch'=>'',
                ];
            }else{
                $prepareData=[
                    'text_service_ch'=>$request->text_service,
                    'text_service_th'=>'',
                ];
            }
            $link = Setting::find($request->id);
            $link->update($prepareData);
            return redirect()->route('setting.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
