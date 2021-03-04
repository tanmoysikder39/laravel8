<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
    function show(){

        $data=member::all();
     return view('list',['allmember'=>$data]);
    }
}
