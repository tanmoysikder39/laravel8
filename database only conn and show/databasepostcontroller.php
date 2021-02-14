<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//ata likhe nite hobe

class databasepostcontroller extends Controller
{
    public function getallpost(){

        $posts=DB::table('laravel_check')->get();
        return view('firstpost',compact('posts'));
    }
    
}
