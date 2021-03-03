<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileuploadcontroller extends Controller
{
   function index(Request $request){

    return $request->file('myfile')->store('docs');
   }
}
