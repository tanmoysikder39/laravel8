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

      $valudatrddata =  $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:12'

      ]);

        return $request->all();//induvusual er jonno -> input('name')
    }
}
