<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\React;

class RecentShare extends Controller
{
    public function index(){
        $categories = Category::all();
        $reacts = React::select('post_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->groupBy('post_id','reactionEmoji')->get();
        $posts = Post::latest()->take(5)->withCount('reacts')->get();

        return view('screens.frontend.recentshare.index')->with('categories',$categories)->with('posts',$posts)->with('reacts',$reacts);
    }

    public function store(Request $request){
        $request->validate([
            'post_content' => 'required|min:8',
            'category' => 'required'
        ]);
        $category = Category::find($request->category);
        Post::create([
            'category_id' => $category->id,
            'posted_by' => Auth::user()->id,
            'message' => $request->post_content
        ]);
        return redirect()->route('recentshare')->with('success','Post created successfully');
    }

    public function show($category){
        return view('screens.frontend.recentshare.show');
    }

    
}
