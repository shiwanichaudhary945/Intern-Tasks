<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $posts = Post::all();

         return view('frontend.index',['posts'=>$posts]);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "title"=>"required",
            "description"=>"required"
        ]);

        $post=new post;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->user_id=Auth::id();
        $post->save();
        return back()->withSuccess("post created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       //
    }
}
