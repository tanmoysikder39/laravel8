<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentFastcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user=DB::table('student2s')->get();
      return view('index2',['student'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:student2s',
            'number' => 'required|string|min:10|unique:student2s',
            'image'=>'required',
            'gender'=>'required|string|',
            'cars'=>'required|string|'
        ]);
        
    DB::table('student2s')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'number'=>$request->number,
        'file'=>$request->image,
        'gender'=>$request->gender,
        'option'=>$request->cars,
    ]);
    $request->session()->flash('message','student id created');
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=DB::table('student2s')->find($id);
        return view('show2',['student'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user=DB::table('student2s')->find($id);
       return view('edite',['student'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:student2s,email,'.$id,
            'number' => 'required|string|min:10|unique:student2s,number,'.$id,
            'image'=>'required',
            'gender'=>'required|string|',
            'cars'=>'required|string|'
        ]);
        
    DB::table('student2s')->where('id',$id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'number'=>$request->number,
        'file'=>$request->image,
        'gender'=>$request->gender,
        'option'=>$request->cars,
    ]);
    $request->session()->flash('message','student id updated');
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       DB::table('student2s')->where('id',$id);
       $request->session()->flash('message','student id deleted');
    return redirect()->back();
    }
}
