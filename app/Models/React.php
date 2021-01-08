<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class React extends Model
{
    use HasFactory;

    protected $table = 'react';
    public $timestamps = false;
    protected $fillable = ['user_id','post_id','reactionEmoji','reactAmount'];

    public function post(){
        return $this->belongsTo(Post::class);
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

    public static function getAmountReact($post_id){
        return React::select('post_id','reactionEmoji',DB::raw("COUNT(reactAmount) as reactAmount"))->where('post_id',$post_id)->groupBy('post_id','reactionEmoji')->get();
    }

    public static function existReact($emojiId,$post_id){
        foreach(React::select('reactionEmoji')->where('user_id',Auth::user()->id)->where('post_id',$post_id)->get() as $emoji){
            if($emojiId == $emoji->reactionEmoji && React::where('user_id',Auth::user()->id)->exists() ) return 1;
        }
        return 0;
    }

}
