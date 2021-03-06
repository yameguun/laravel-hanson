<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // 使うモデルを読み込ませる

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at')->take(10)->get();
        return view('pertials/blog/index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();
        return view('pertials/blog/create', ['blog' => $blog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->article = $request->input('article');
        $result = $blog->save();
        if (!$result) {
           return "blog create fail";
        }
        return "blog created";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $blog = Blog::find($id);
        return view('pertials/blog/show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pertials/blog/edit', ['blog' => $blog]);
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
       $blog = Blog::find($id);
       $blog->title = $request->input('title');
       $blog->article = $request->input('article');
       //boolean
       $result = $blog->save();
       if (!$result) {
           return "blog update fail";
       }
       return "blog updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       $blog = Blog::find($id);
       $result = Blog::destroy($id);
       if (!$result) {
           return "blog delete fail";
       }
       return 'blog deleted';
    }
}
