<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactEmoji extends Model
{
    use HasFactory;
    protected $table = 'reaction_emoji';

    public function reacts(){
        return $this->hasMany(React::class);
    }
}
