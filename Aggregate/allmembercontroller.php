<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allmembercontroller extends Controller
{
    function Operation(){
        return DB::table('members')->max('id');
    }
}
