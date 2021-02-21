<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
   function getdata(Request $req){


    $req->validate([
        'name' => 'required|string',
        'password' => 'required|min:6|max:10',
    ]);

   return $req->input();

   
   }
}
