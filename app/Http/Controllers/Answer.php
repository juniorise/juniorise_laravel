<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class Answer extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);
        $comment = $post->comments;
        return view('screens.frontend.answer.show')->with('post',$post);
    }

    public function store(Request $request,$id){
        $request->validate([
            'comment_content' => 'required|min:8'
        ]);
        Comment::create([
            'post_id' => $id,
            'commented_by' => Auth::user()->id,
            'message' => $request->comment_content
        ]);
        return redirect()->route('answers',$id)->with('success','Comment created successfully');
    }
}
