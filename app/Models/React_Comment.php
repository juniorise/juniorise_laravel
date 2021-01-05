<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class React_Comment extends Model
{
    use HasFactory;

    protected $table = 'react_comment';
    public $timestamps = false;
    protected $fillable = ['user_id','comment_id','reactionEmoji','reactAmount'];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reactEmoji(){
        return $this->belongsTo(ReactEmoji::class,'reactionEmoji');
    }

    public function scopeWhereArray($query, $array) {
        foreach($array as $field => $value) {
            $query->where($field, $value);
        }
        return $query;
    }

    public static function getAmountReact($comment_id){
        return React_Comment::select('comment_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->where('comment_id',$comment_id)->groupBy('comment_id','reactionEmoji')->get();
    }

    public static function existReact($emojiId,$comment_id){
        foreach(React_Comment::select('reactionEmoji')->where('user_id',Auth::user()->id)->where('comment_id',$comment_id)->get() as $emoji){
            if($emojiId == $emoji->reactionEmoji && React_Comment::where('user_id',Auth::user()->id)->exists() ) return 1;
        }
        return 0;
    }
}
