<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\ContactUsController as ContactUs;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::post('/contact-us',[ContactUs::class,'store'])->name('contact-us.store');

Route::view('/dashboard/login','dashboard.login')->name('dashboard.login-form');
Route::post('/dashboard/login',[AuthController::class,'login'])->name('dashboard.login');
Route::get('/dashboard/contact-us/list',[ContactUsController::class,'index'])->name('dashboard.contact-us.index');

Route::view('/','web.index')->name('web.index');
Route::view('/about','web.about')->name('web.about');
Route::view('/services','web.services')->name('web.services');
Route::view('/proficiencies','web.proficiencies')->name('web.proficiencies');
Route::view('/contact-us','web.contact-us')->name('web.contact-us');
Route::view('/getquotation','web.getquotation')->name('web.getquotation');
Route::view('/act','web.act')->name('web.act');
Route::view('/act-andmore','web.act-andmore')->name('web.act-andmore');
Route::view('/act-more','web.act-more')->name('web.act-more');
Route::view('/div-act-more','web.div-act-more')->name('web.div-act-more');
Route::view('/dive-more','web.dive-more')->name('web.dive-more');
Route::view('/framework','web.framework')->name('web.framework');
Route::view('/learn','web.learn')->name('web.learn');
Route::view('/service','web.service')->name('web.service');
Route::view('/think','web.think')->name('web.think');
Route::view('/think-more','web.think-more')->name('web.think-more');
Route::view('/user','web.user')->name('web.user');
Route::view('/visual','web.visual')->name('web.visual');
Route::view('/visualize','web.visualize')->name('web.visualize');
Route::view('/terms','web.terms')->name('web.terms');
Route::view('/privacy','web.privacy')->name('web.privacy');
// {{route('web.')}}

Route::get('test-pdff',function(){
    $data = [
        'foo' => 'bar'
    ];

    
    $pdf = Pdf::loadView('pdf.test', $data);
    return $pdf->download('invoice.pdf');

});