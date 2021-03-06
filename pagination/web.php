<?php

use App\Http\Controllers\addmembercontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\membercontroller;
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
//pagination start from here

Route::get('list',[membercontroller::class,'index']);

//pagination end from here