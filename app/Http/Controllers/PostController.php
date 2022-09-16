<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use lang\ar;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(postRequest $request)
    {
        $massages= $this-> getMassages();
        $rules= $this -> getRules();
        $validator=validator::make($request->all(),$rules,$massages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        Post::create([
            'post_name'=>$request->post_name,
            'post_no'=>$request->post_no,
            'post_content'=>$request->post_content
        ]);
          return redirect()->back()->with('status',"Insert successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

//    protected function getRules(){
//       return $rules=
//            ['post_name'=>'required|max:50|unique:posts,name',
//            'post_no'=>'numeric',
//            'post_content'=>'required'];
//
//    }
//
//    protected function getMassages(){
//       return $messages=[
//            'post_name.required'=>__('messages.post name required'),
//            'post_name.unique'=>__('messages.post name unique'),
//            'post_no.numeric'=>__('messages.post no numeric')
//        ];
//    }
}
