<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = User::all();
        if (count($member) > 0) {
            return view("admin/member/member")->with('data_member', $member);
        }
        return view("admin/member/member")->with('data_member', 'description');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
