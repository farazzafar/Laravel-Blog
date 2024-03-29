<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));  
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store()
    {

        $this->validate(request(),[

            'title'  => 'required',
            'body'   => 'required'

        ]);


        Post::create([

            'title'  => request('title'),
            'body'   => request('body'),
            'user_id'=> auth()->id()


        ]);



        return redirect('/');
    }

    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    
    public function edit(Posts $posts)
    {
        //
    }

    
    public function update(Request $request, Posts $posts)
    {
        //
    }

    
    public function destroy(Posts $posts)
    {
        //
    }
}
