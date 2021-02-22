<?php

use App\Http\Controllers\allofstudentcontroller;
use App\Http\Controllers\allstudentcontroller;
use App\Http\Controllers\allstudentscontroller;
use App\Http\Controllers\databasepostcontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\testcontroll;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\usercontroller;
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


//Route::get('/test',[testcontroll::class,'index'])->middleware('checkuser');
//Route::post('/test',[testcontroll::class,'submit'])->middleware('checkuser');

//session start form here 
//Route::get('/session/get',[sessioncontroller::class,'getsessiondata']);
//Route::get('/session/store',[sessioncontroller::class,'storesessiondata']);
//Route::get('/session/delete',[sessioncontroller::class,'deletesessiondata']);
//session end form here

//database connect start form here
//Route::get('/post',[databasepostcontroller::class,'getallpost'])->name('post.getallpost');
//Route::get('/add-post',[databasepostcontroller::class,'addpost'])->name('post.addpost');
//Route::post('/add-post',[databasepostcontroller::class,'addpostsubmit'])->name('post.addsubmit');
//Route::get('/single/{id}',[databasepostcontroller::class,'getpostbyid'])->name('post.getbyid');

//database connect end form here


//student controller start form here
//Route::get('/',[allstudentcontroller::class,'index'])->name('home');
//Route::get('create',[allstudentcontroller::class,'create'])->name('create');
//Route::post('store',[allstudentcontroller::class,'store'])->name('store');
//Route::get('edit/{id}',[allstudentcontroller::class,'edit'])->name('edit');
//Route::put('update/{id}',[allstudentcontroller::class,'update'])->name('update');
//Route::get('student/{id}',[allstudentcontroller::class,'show'])->name('show');
//Route::delete('student/{id}',[allstudentcontroller::class,'destroy'])->name('delete');




//student controller start form here
//Route::get('/',[allofstudentcontroller::class,'index'])->name('home');
//Route::get('create',[allofstudentcontroller::class,'create'])->name('create');
//Route::post('store',[allofstudentcontroller::class,'store'])->name('store');
//Route::get('edit/{id}',[allofstudentcontroller::class,'edit'])->name('edit');
//Route::put('update/{id}',[allofstudentcontroller::class,'update'])->name('update');
//Route::get('view/{id}',[allofstudentcontroller::class,'show'])->name('show');
//Route::delete('view/{id}',[allofstudentcontroller::class,'destroy'])->name('delete');


//student controller start form here
//form valudation start from here

//Route::post('user',[usercontroller::class,'getdata']);
//Route::view('/','form');
//Route::view('middle','middle');
//Route::view('home','home');
//form valudation end from here  

//group middleware start
//Route::view('home','home');

//Route::view('noaccess','noaccess');

//Route::group(['middleware'=>['protectedpage']],function(){//kornel er group theke

 //   Route::view('users','users');

//});
//group middleware end

//route middleware start
Route::view('home','home');
Route::view('users','users')->middleware('checkuser');//kernel er route middleware theke
Route::view('noaccess','noaccess');

//route middleware end