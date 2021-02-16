<?php

use App\Http\Controllers\databasepostcontroller;
use App\Http\Controllers\studentcontroller;
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


Route::get('/test',[testcontroll::class,'index'])->middleware('checkuser');
Route::post('/test',[testcontroll::class,'submit'])->middleware('checkuser');

//session start form here 
Route::get('/session/get',[sessioncontroller::class,'getsessiondata']);
Route::get('/session/store',[sessioncontroller::class,'storesessiondata']);
Route::get('/session/delete',[sessioncontroller::class,'deletesessiondata']);
//session end form here

//database connect start form here
Route::get('/post',[databasepostcontroller::class,'getallpost'])->name('post.getallpost');
Route::get('/add-post',[databasepostcontroller::class,'addpost'])->name('post.addpost');
Route::post('/add-post',[databasepostcontroller::class,'addpostsubmit'])->name('post.addsubmit');
Route::get('/single/{id}',[databasepostcontroller::class,'getpostbyid'])->name('post.getbyid');

//database connect end form here
//only for student controller start from here
Route::get('/',[studentcontroller::class,'index'])->name('home');
Route::get('create',[studentcontroller::class,'create'])->name('create');
Route::post('store',[studentcontroller::class,'store'])->name('store');
Route::get('/edit{id}',[studentcontroller::class,'edit'])->name('edit');
Route::put('/update{id}',[studentcontroller::class,'update'])->name('update');
Route::get('/student{id}',[studentcontroller::class,'show'])->name('show');
Route::delete('/student{id}',[studentcontroller::class,'destroy'])->name('delete');
//only for student controller end from here