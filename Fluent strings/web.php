<?php

use App\Http\Controllers\citecontroll;
use App\Http\Controllers\clintcontroller;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\fluntcontroller;
use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\siteecontroller;
use Illuminate\Routing\Route as RoutingRoute;
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

//Route::get('/',[siteecontroller::class,'home']);
//Route::get('/abt/{fname}/{mname}/{lname}',[siteecontroller::class,'about']);

Route::get('/posts',[citecontroll::class,'postall']);
Route::get('/posts/{id}',[citecontroll::class,'getpostbyid']);
Route::get('/adpost',[citecontroll::class,'addpost']);
Route::get('/uid',[citecontroll::class,'updatepost']);
Route::get('/dlt/{id}',[citecontroll::class,'deleted']);


Route::get('/fc',[fluntcontroller::class,'index']);