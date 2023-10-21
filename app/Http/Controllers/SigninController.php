<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $prepareData=[
            'description'=>$request->decs
        ];
        $lecturer = Lecturer::create($prepareData);
        return redirect()->route('/signin');
    }

    /**
     * Display the specified resource.
     */
    public function show(signin $signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(signin $signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, signin $signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(signin $signin)
    {
        //
    }
}
