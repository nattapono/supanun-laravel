<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignoutController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
