<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['content','like','dislike','articles_id','comments_id'];

    public function article(){
        return $this->belongsTo('Article');
    }

    public function childComments(){
        return $this->hasMany('Comment');
    }

    public function parentComment(){
        return $this->belongsTo('Comment');
    }
}
