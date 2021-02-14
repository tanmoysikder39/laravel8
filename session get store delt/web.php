<?php

use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\testcontroll;
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
});
Route::get('/test',[testcontroll::class,'index'])->middleware('checkuser');
Route::post('/test',[testcontroll::class,'submit'])->middleware('checkuser');

//session start form here 
Route::get('/session/get',[sessioncontroller::class,'getsessiondata']);
Route::get('/session/store',[sessioncontroller::class,'storesessiondata']);
Route::get('/session/delete',[sessioncontroller::class,'deletesessiondata']);
//session end form here