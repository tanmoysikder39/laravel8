<?php

use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\studentFastcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentNewController;
use App\Http\Controllers\workercontroller;

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

Route::get('/',[workercontroller::class,'index'])->name('home');

Route::get('create',[workercontroller::class,'create'])->name('create');
Route::post('store',[workercontroller::class,'store'])->name('store');


Route::get('edit/{id}',[workercontroller::class,'edit'])->name('edit');
Route::put('update/{id}',[workercontroller::class,'update'])->name('update');


Route::get('view/{id}',[workercontroller::class,'show'])->name('view');


Route::delete('delete/{id}',[workercontroller::class,'destroy'])->name('delete');





