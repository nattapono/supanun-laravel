<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ZodiacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zodiacs = Zodiac::all();
        // return $zodiacs;
        if (count($zodiacs) > 0) {
            return view("admin/zodiac/index")->with('zodiacs_data', $zodiacs);
        }
        return view("admin/zodiac/index")->with('zodiacs_data', '');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/zodiac/create");
        }else{
            return view("admin/zodiac/create_chin");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'subject'=>'reqiured',
        //     'desc'=>'reqiured',
        //     'rasi_image'=>'image|nullable|max:1999',
        // ]);

        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('rasi_image')){
                $filenameWithExt = $request->file('rasi_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('rasi_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('rasi_image')->storeAs('public/images/rasi',$fileNameToStore);

                $prepareData=[
                    'rasi_name_th'=>$request->subject,
                    'rasi_image'=>$fileNameToStore,
                    'rasi_desc_th'=>$request->desc,
                    'rasi_name_ch'=>'',
                    'rasi_desc_ch'=>''
                ];
            }else{
                $prepareData=[
                    'rasi_name_th'=>$request->subject,
                    'rasi_image'=>'noimages.png',
                    'rasi_desc_th'=>$request->desc,
                    'rasi_name_ch'=>'',
                    'rasi_desc_ch'=>''
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('rasi_image')){
                $filenameWithExt = $request->file('rasi_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('rasi_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('rasi_image')->storeAs('public/images/rasi',$fileNameToStore);

                $prepareData=[
                    'rasi_name_ch'=>$request->subject,
                    'rasi_image'=>$fileNameToStore,
                    'rasi_desc_ch'=>$request->desc,
                    'rasi_name_th'=>'',
                    'rasi_desc_th'=>''
                ];
            }else{
                $prepareData=[
                    'rasi_name_ch'=>$request->subject,
                    'rasi_image'=>'noimages.png',
                    'rasi_desc_ch'=>$request->desc,
                    'rasi_name_th'=>'',
                    'rasi_desc_th'=>''
                ];
            }
        }

        $rasi = Zodiac::create($prepareData);
        return redirect()->route('zodiac.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zodiac $zodiac)
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
            return view("admin/zodiac/edit")->with('zodiacs_data', $request);
        }else{
            return view("admin/zodiac/edit_ch")->with('zodiacs_data', $request);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zodiac $zodiac)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('rasi_image')){
                $filenameWithExt = $request->file('rasi_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('rasi_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('rasi_image')->storeAs('public/images/rasi',$fileNameToStore);

                $prepareData=[
                    'rasi_name_th'=>$request->subject,
                    'rasi_image'=>$fileNameToStore,
                    'rasi_desc_th'=>$request->desc,
                ];
            }else{
                $prepareData=[
                    'rasi_name_th'=>$request->subject,
                    'rasi_desc_th'=>$request->desc,
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('rasi_image')){
                $filenameWithExt = $request->file('rasi_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('rasi_image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('rasi_image')->storeAs('public/images/rasi',$fileNameToStore);

                $prepareData=[
                    'rasi_name_ch'=>$request->subject,
                    'rasi_image'=>$fileNameToStore,
                    'rasi_desc_ch'=>$request->desc,
                ];
            }else{
                $prepareData=[
                    'rasi_name_ch'=>$request->subject,
                    'rasi_desc_ch'=>$request->desc,
                ];
            }
        }

        $zodiac_update = Zodiac::find($request->id);
        $zodiac_update->update($prepareData);
        return redirect()->route('zodiac.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zodiac $zodiac)
    {
        $zodiac_del = Zodiac::find($zodiac->id);
        $zodiac_del->delete();
        return redirect()->route('zodiac.index');
    }
}
