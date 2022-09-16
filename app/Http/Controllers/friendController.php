<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class friendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Students.add_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::table('friends')->insert([
            'Name'=>$request->name,
            'gender'=>$request->gender,
            'level'=>$request->level,
            'address'=>$request->address,
            'birthdate'=>$request->birthdate,
            'about'=>$request->about
        ]);
        return redirect()->route('frd.create')->with('status',"Insert successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $frd=DB::table('friends')->get();
        return view('Students.edit_student',compact('frd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData=DB::table('friends')->where('id',$id)->first();
        return view('Students.update_student',compact('editData'));
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
        DB::table('friends')->where('id',$id)->update([
           'Name'=>$request->name,
            'gender'=>$request->gender,
            'level'=>$request->level,
            'address'=>$request->address,
            'birthdate'=>$request->birthdate,
            'about'=>$request->about
        ]);
        return redirect()->route('frd.edit')->with('status',"Update Data has  successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('friends')->where('id',$id)->delete();
        return response("delete seccfuly");
    }
}
