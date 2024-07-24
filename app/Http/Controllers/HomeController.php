<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');

    }

    function postIndex() {

        $posts = Post::all();

        return view("admin.table",['posts'=>$posts]);

    }

    function edit($id) {

        $posts=Post::find($id);
        return view("admin.post.edit",['posts'=>$posts]);


    }

    function destroy($id) {

        $posts=Post::find($id);
        $posts->delete();
        return back();

    }

    public function update(Request $request)
    {

        $post=Post::find($request->post_id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->update();
        return back()->withSuccess("updated sucessfully");
    }

}
