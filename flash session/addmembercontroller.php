<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addmembercontroller extends Controller
{
   function addmem(Request $request){

    $data= $request->input('name');
    $request->session()->flash('name',$data);//kono kicu sent hole message dibe.
    return redirect()->back();
   }
}
