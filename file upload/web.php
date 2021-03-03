<?php

use App\Http\Controllers\addmembercontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\fileuploadcontroller;
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
//flash session start from here
Route::post('add',[addmembercontroller::class,"addmem"]);
Route::view('login','member');
//flash session end from here

//file upload start from here
Route::post('fileupload',[fileuploadcontroller::class,'index']);
Route::view('upload','upload');

//file upload end from here