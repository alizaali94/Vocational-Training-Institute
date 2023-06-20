<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[PagesController::class,'Home'])->name('home');
Route::get("/About-Us",[PagesController::class,'AboutUs'])->name('about');
Route::get("/Admission/Admission-Policy",[PagesController::class,'Policy'])->name('policy');
Route::get("/Contact-Us",[PagesController::class,'Contact'])->name('contact');
Route::get("/Faculty",[PagesController::class,'Faculty'])->name('faculty');
Route::get("/Admission/How-To-Apply",[PagesController::class,'HowToApply'])->name('howToApply');
Route::get("/Admission/Online-Admission",[PagesController::class,'OnlineAdd'])->name('onlineAdd');
Route::get("/Trades",[PagesController::class,'Trades'])->name('trades');
