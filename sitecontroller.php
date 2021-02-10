<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
  //route diye controller and view connect
  function home(){

    return view("homepage");//homepage.blade.php
 }

 function about(){

    return view ("aboutpage");//aboutpage.blade.php
 }

 function contact(){

    return view ("contactpage");//contactpage.blade.php
 }


}
