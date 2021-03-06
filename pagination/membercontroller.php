<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
   function index(){

   $data= member::paginate(5);
   return view('list',['allmember'=>$data]);
   }
}
