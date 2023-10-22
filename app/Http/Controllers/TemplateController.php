<?php

namespace App\Http\Controllers;
use App\Models\Lecturer;
use App\Models\Activity_album;
use App\Models\Setting;
use App\Models\Zodiac;
use App\Models\Card;
use App\Models\Wisdom;
use App\Models\Wisdom_type;
use App\Models\Member;
use App\Models\Activity_calendar;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TemplateController extends Controller
{
    public function index(){
        // session_start();
        // Auth(
        //     $user_auth = Member::find($_SESSION['phone'])
        // );
        $setting = Setting::all();
        $zodiacs = Zodiac::all();
        return view('FrontClient.home')->with(['data_setting' => $setting, 'data_zodiac' => $zodiacs]);
    }
    public function home(){
        $setting = Setting::all();
        $zodiacs = Zodiac::all();
        return view('FrontClient.home')->with('data_setting', $setting);
    }
    public function about(){
        $lecturers = Lecturer::all();
        return view('FrontClient.about')->with('lecturers_data', $lecturers);
    }
    public function history(){
        return view('FrontClient.history');
    }
    public function contact(){
        return view('FrontClient.contact');
    }
    public function payment(){
        return view('FrontClient.payment');
    }
    public function blog(){ // สายญาณ
        $wisdom = Wisdom::all();
        $wisdom_type = Wisdom_type::all();
        return view('FrontClient.blog')->with(['wisdom_data'=> $wisdom, 'wisdom_type'=>$wisdom_type]);
    }
    public function forecast(){
        $card = Card::all();
        $zodiacs = Zodiac::all();
        $currentPath = url()->current();
        return view('FrontClient.forecast')->with(['card_data' => $card, 'data_zodiac' => $zodiacs]);
    }
    public function calendar(){
        $activity_calendar = Activity_calendar::all();
        return view('FrontClient.activity_calendar')->with(['data_calendar' => $activity_calendar]);
    }
    public function videos(){
        return view('FrontClient.activity_videos');
    }
    public function album(){
        $activity_album = Activity_album::all();
        return view('FrontClient.activity_album')->with('activity_album', $activity_album);
    }
    public function albumMore(Request $request){

        $activity_album = Activity_album::find($request->id);
        return view('FrontClient.more')->with('activity_album', $activity_album);
    }

    public function signin(){
        return view('FrontClient.signin');
    }
    public function signup(){
        return view('FrontClient.signup');
    }

    public function packageId(){
        if(!Auth::user()){
            return redirect()->route('customer.subscriptions.index');
        }else if (Auth::user()->active_portal != 'admin' ) {
            return redirect()->route('customer.subscriptions.index');
        }else{
            return redirect()->back();
        }
    }

    public function login(Request $request)
    {
       return $request;
    }
}
