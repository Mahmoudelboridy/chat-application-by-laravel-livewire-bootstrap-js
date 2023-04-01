<?php

use App\Http\Controllers\authcontroller;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('nowlogin');
Route::get('signup',[authcontroller::class,'signup'])->middleware('nowlogin');
Route::post('/signup',[authcontroller::class,'sign_up'])->name('signup');
Route::get('login',[authcontroller::class,'login'])->middleware('nowlogin');
Route::post('/login',[authcontroller::class,'log_in'])->name('login');
Route::get('/user',[authController::class,'user'])->middleware('checklogin')->name('user');
Route::get('/user/friends',[authController::class,'frien'])->middleware('checklogin')->name('friends');
Route::get('/user/only_friend/{id}',[authController::class,'frien1'])->middleware('checklogin');
Route::get('/user/only_friend/message/{id}',[authController::class,'messag'])->middleware('checklogin');
Route::post('user/only_friend/message',[authController::class,'send'])->name('send')->middleware('checklogin');
Route::get('/user/message',[authController::class,'message'])->middleware('checklogin')->name('message');
Route::get('/logout',[authController::class,'logout'])->name('logout');