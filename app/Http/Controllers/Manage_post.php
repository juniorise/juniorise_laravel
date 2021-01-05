<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use App\Models\User;
// use DB;
use Illuminate\Support\Facades\DB;

class Manage_post extends Controller
{

    public function getData(){
        $user = User::all();
        // $categories = Category::all();
        // $reacts = React::select('post_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->groupBy('post_id','reactionEmoji')->get();
        $messages = Post::latest()->withCount('reacts')->get();
        // $count_user = User::select('id',DB::raw("COUNT(id) as userAmount"))->get();
        return view('screens/admin/managepost')->with('users',$user)->with('messages',$messages);
    }
    public function deleteData($id){
        $delete = Post::find($id);
        $delete->delete();
        return redirect('admin/manage-post')
                        ->with('success','Post deleted successfully');
    }
}
