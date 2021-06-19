<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = page::all();
        return view('page.index',['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        page::create([
            'title' => $request->title,
            'content_id' => $request->content_id,
            'content' => $request->content
        ]);
        return redirect(route('page.index'))->with(['success'=>'added']);
  
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
        $pages=page::where('id',$id)->first();
        return view('page.edit',['page'=>$pages]);
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
        page::where('id',$id)->update([

            'title'=>$request->title,
            'content_id'=>$request->content_id,
            'content'=>$request->content,
        ]);
        return redirect(route('page.index'))->with(['success'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        page::where('id',$id)->delete();
        return redirect(route('page.index'))->with(['success'=>'delete']);
    }
}
