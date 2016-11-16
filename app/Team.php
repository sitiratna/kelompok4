<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['name','position','information','facebook_link','twitter_link','instagram_link'];
}
