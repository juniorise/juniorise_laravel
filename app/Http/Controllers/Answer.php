<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Post;
use App\Models\Comment;
use App\Models\ReactEmoji;
use App\Models\React;

class Answer extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);
        $reacts = React::select('post_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->where('post_id',$id)->groupBy('post_id','reactionEmoji')->get();
        return view('screens.frontend.answer.show')->with('post',$post)->with('reacts',$reacts);
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

    public function like(Request $request,$id){
        $like = $request->all();
        $post = Post::findOrFail($id);
        $existUser = React::where('user_id', Auth::user()->id)->exists() && React::where('post_id', $id)->exists();
        $emoji = ReactEmoji::where('emojiImage','LIKE','%'.$request->emoji.'%')->first();
        if(!$existUser){
            React::create([
                'user_id' =>  Auth::user()->id,
                'post_id' => $id,
                'reactionEmoji' => $emoji->id,
                'reactAmount' => 1
            ]);
        }else{
            $whereArray = array('user_id' => Auth::user()->id,'post_id' => $id);
            React::whereArray($whereArray)->delete();
        }
        return redirect()->route('answers',$id);
    }
}
