<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\category;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = posts::all();
        return view('post.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        posts::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content
        ]);
        return redirect(route('post.index'))->with(['success'=>'added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=posts::where('id',$id)->first();
        return view('post.edit',['post'=>$posts ]) ; 
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
        posts::where('id',$id)->update([

            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'content'=>$request->content,
        ]);
        return redirect(route('post.index'))->with(['success'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        posts::where('id',$id)->delete();
        return redirect(route('post.index'))->with(['success'=>'delete']);
    }
}
