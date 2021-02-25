<?php

use App\Http\Controllers\allofstudentcontroller;
use App\Http\Controllers\testcontroll;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

Route::get('user',[studentcontroller::class,'index']);
