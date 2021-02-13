<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class testcontroll extends Controller
{
    public function index(){

        return view('index');
    }
    public function submit(Request $request){

        return $request->input('email');
    }
}
