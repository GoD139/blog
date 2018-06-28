<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }


    public function show($id)
    {
        $post = Post::where('slug', $id)->first();

        return view('post', compact('post'));
    }

}
