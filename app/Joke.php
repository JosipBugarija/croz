<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'content', 'category_id', 'likes', 'dislikes'
    ];

    public function category() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}