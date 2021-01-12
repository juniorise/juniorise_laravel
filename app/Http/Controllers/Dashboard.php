<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use App\Models\User;
// use DB;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{

    public function getData(){
        $user = User::all();
        // $count_user = User::count();
        // $categories = Category::all();
        // $reacts = React::select('post_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->groupBy('post_id','reactionEmoji')->get();
        $messages = Post::latest()->withCount('reacts')->get();
         $count_user = User::select('id',DB::raw("COUNT(id) as userAmount"))->get();
         $count_post = User::select('id',DB::raw("COUNT(id) as postAmount"))->get();
        //  return $count;
        return view('screens/admin/dashboard')->with('users',$user)->with('messages',$messages)->with('count_user',$count_user[0])->with('count_post',$count_post[0]);
    }

    public function deleteData($id){
        $delete = Post::find($id);
        $delete->delete();
        return redirect('admin/dashboard')
                        ->with('success','Post deleted successfully');
    }
}
