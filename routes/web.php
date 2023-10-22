<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\ZodiacController;
use App\Http\Controllers\ActivityCalendarController;
use App\Http\Controllers\ActivityVideoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ActivityAlbumController;
use App\Http\Controllers\WisdomController;
use App\Http\Controllers\WisdomTypeController;
use App\Http\Controllers\TermsofuseController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Routing\RouteGroup;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/about', function () {
//     return view('FrontClient.about');
// });
// Route::get('lang/{locale}',[LanguageController::class,'swap']);
// // Route::get('client/{locale}',[LanguageController::class,'swap']);
Route::get('/client/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();

});



//  Route::group(['prefix'=>'{locale}'], function(){
    // Route::get('/home',[TemplateController::class,'index'])->middleware('setLocale');
    // Route::get('/about',[TemplateController::class,'about'])->middleware('setLocale');
    // Route::get('/about',[TemplateController::class,'about'])->name('about')->middleware('setLocale');
//     Route::get('/history',[TemplateController::class,'history'])->middleware('setLocale');
//

// });
    Route::get('/',[TemplateController::class,'index'])->name('home');
    Route::get('/home',[TemplateController::class,'index']);
    Route::get('/about',[TemplateController::class,'about'])->name('about');
    Route::get('/contacts',[TemplateController::class,'contact'])->name('contact');
    Route::get('/history',[TemplateController::class,'history'])->name('history');
    Route::get('/payment',[TemplateController::class,'payment'])->name('payment');
    Route::get('/blog',[TemplateController::class,'blog'])->name('blog');
    Route::get('/forecast',[TemplateController::class,'forecast'])->name('forecast');
    Route::get('/activity/calendar',[TemplateController::class,'calendar'])->name('calendar');
    Route::get('/activity/videos',[TemplateController::class,'videos'])->name('video');
    Route::get('/activity/album',[TemplateController::class,'album'])->name('album');
    Route::get('/activity/album-more',[TemplateController::class,'albumMore'])->name('album.more');
    Route::get('/signin',[TemplateController::class,'signin'])->name('signin');
    Route::get('/login',[TemplateController::class,'signin'])->name('login');
    Route::get('/logout',[LogoutController::class,'destroy'])->name('logout');
    Route::resource('/signup',SignupController::class);
Auth::routes();

// admin
// Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('is_admin');
Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::resource('/admin/lecturer',LecturerController::class);

Route::resource('/admin/about',AboutController::class);
Route::resource('/admin/payment',PaymentController::class);
Route::resource('/admin/wisdom',WisdomController::class);
Route::resource('/admin/wisdom_type',WisdomTypeController::class);

// Route::get('/admin/member',[AdminController::class,'member']);
Route::resource('/admin/member',MemberController::class);
Route::resource('/admin/card',CardController::class);
Route::resource('/admin/setting',SettingController::class);
Route::resource('/admin/zodiac',ZodiacController::class);
Route::resource('/admin/activities/calendar',ActivityCalendarController::class);
Route::resource('/admin/activities/videos',ActivityVideoController::class);
Route::resource('/admin/activities/album',ActivityAlbumController::class);
Route::resource('/admin/termsofuse',TermsofuseController::class);
Route::resource('/admin/appointment',AppointmentController::class);
Route::get('/signout',[SignoutController::class,'destroy'])->name('logout');

