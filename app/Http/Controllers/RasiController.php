<?php

namespace App\Http\Controllers;

use App\Models\Rasi;
use Illuminate\Http\Request;

class RasiController extends Controller
{
    public function index()
    {
        $zodiacs = Rasi::all();
        // return $zodiacs;
        if (count($zodiacs) > 0) {
            return view("admin/zodiac/index")->with('zodiacs_data', $zodiacs);
        }
        return view("admin/zodiac/index")->with('zodiacs_data', '');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/zodiac/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prepareData=[
            'rasi_name'=>$request->subject,
            'rasi_image'=>$request->image,
            'rasi_desc'=>$request->decs,
        ];
        $rasi = Rasi::create($prepareData);
        return redirect()->route('zodiac.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rasi $zodiac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rasi $zodiac)
    {
        return view("admin/zodiac/edit")->with('zodiacs_data', $zodiac);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rasi $zodiac)
    {
        $prepareData=[
            'rasi_name'=>$request->subject,
            'rasi_image'=>$request->image,
            'rasi_desc'=>$request->decs,
        ];
        $zodiac_update = Rasi::find($zodiac->id);
        $zodiac_update->update($prepareData);
        return redirect()->route('zodiac.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rasi $zodiac)
    {
        //
    }
}
