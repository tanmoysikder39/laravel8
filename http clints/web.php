<?php

use App\Http\Controllers\clintcontroller;
use App\Http\Controllers\democontroller;
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

Route::get('/posts',[clintcontroller::class,'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}',[clintcontroller::class,'getpostbyid'])->name('posts.getpostbyid');
Route::get('/addpost',[clintcontroller::class,'addpost'])->name('posts.addpost');
Route::get('/update',[clintcontroller::class,'updatedid'])->name('posts.updatedid');
Route::get('/delete/{id}',[clintcontroller::class,'delete'])->name('posts.delete');