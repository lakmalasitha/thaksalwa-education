<?php

namespace App\LiveVideo;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );


    public function replies(){
    	return $this->hasMany('App\LiveVideo\Reply');
    }
}
