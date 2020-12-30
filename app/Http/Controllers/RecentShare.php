<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class RecentShare extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::latest()->take(5)->get();
        return view('screens.frontend.recentshare.index')->with('categories',$categories)->with('posts',$posts);
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
