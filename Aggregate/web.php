<?php

use App\Http\Controllers\addmembercontroller;
use App\Http\Controllers\allmembercontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\membercontrollers;
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
//add data in database start form here
Route::view('addmember','add');
Route::post('addm',[membercontroller::class,'addData']);


//add data in database end form here

//delete data start from data base
Route::get('delete',[membercontrollers::class,'list']);
Route::get('iddelete/{id}',[membercontrollers::class,'distroy']);
Route::get('edit/{id}',[membercontrollers::class,'showdata']);
Route::post('edit',[membercontrollers::class,'update']);


//delete data end from data base
Route::get('agg',[allmembercontroller::class,'Operation']);