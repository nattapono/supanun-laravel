<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FrontClient.signup');
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
            'name'=>$request->name,
            'last_name'=>$request->lastName,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'd_time'=>$request->d_time,
            'b_time'=>$request->b_time,
            'password'=>$request->password,
            'is_admin'=>'0'
        ];
        $signup = User::create($prepareData);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Signin $signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signin $signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Signin $signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signin $signin)
    {
        //
    }
}

