<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class membercontrollers extends Controller
{
    function list (Request $request){
       $data=member::all();
        return view('dlist',['databaseinput'=>$data]);

    }
    function distroy(Request $request,  $id){
        $data= member::find($id);
        $data->delete();
      
        $request->session()->flash('message','student deleted');
        return redirect()->back();
      
    }
    function showdata($id){

        $data= member::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $request){
        
$data=member::find($request->id);
$data->name=$request->name;
$data->email=$request->email;
$data->address=$request->address;
$data->save();

$request->session()->flash('message','student updated');
return redirect('delete');


    }
}
