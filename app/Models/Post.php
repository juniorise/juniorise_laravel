<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const CREATED_AT = 'posted_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'posts';

    protected $fillable = ['category_id','posted_by','message'];

    public function user(){
        return $this->belongsTo(User::class,'posted_by');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function reacts(){
        return $this->belongsToMany(ReactEmoji::class,'react');
    }
}
