<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
  
public function getsessiondata(Request $request)
{
    if($request->session()->has('name'))
    {
        echo $request->session()->get('name');
    }
    else{
        echo "no data in the session";
    }
}
public function storesessiondata(Request $request)
{
    $request->session()->put('name','tanmoy');
    echo "data has been added to the session";
}

public function  deletesessiondata (Request $request)
{
    $request->session()->forget('name');
    echo "data deleted to the session";
}
   

}
