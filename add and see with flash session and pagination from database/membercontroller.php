<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
   function index(){

   $data= member::paginate(10);
   return view('list',['allmember'=>$data]);
   }

   function addData(Request $request){

      $member= New Member;
      $member->name=$request->name;
      $member->email=$request->email;
      $member->address=$request->address;
      $member->save();
      $data=$request->input('name');
      $request->session()->flash('name',$data);
      return redirect('addmember');
   }
   
}

