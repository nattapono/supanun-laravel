<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin/dashboard");
    }

    public function login(){
        return view("admin/login");
    }
    public function adminLogin(){
        return view("admin/login/adminLogin");
    }
    public function lecturer(){
        return view("admin/lecturer");
    }
    public function wisdom(){
        return view("admin/wisdom");
    }

    public function member(){
        return view("admin/member/member");
    }
}
