<?php

namespace App\Http\Controllers;



use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store(Post $post, Request $request, $id)
    {

        Comment::create([
            'content' => request('content'),
            'post_id' => $id,
            'user_id' => 1
        ]);

        return back();
    }
}
