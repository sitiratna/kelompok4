<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','content','like','dislike','user_id'];

    public function user(){
        return $this->belongsTo('User');
    }

    public function comments(){
        return $this->hasMany('Comment');
    }
}