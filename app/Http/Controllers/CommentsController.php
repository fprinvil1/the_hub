<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Comment;
use DB;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(),[
            'body' => 'required'
        ]);

        $comment = new Comment;
        $comment->body = request('body');
        $comment->post_id = $post->id;
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return view('posts.show')->with('post',$post);
    }

}
