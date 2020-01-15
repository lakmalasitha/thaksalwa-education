<?php

namespace App\LiveVideo;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable = [
    	'comment_id',
    	'name',
    	'reply',
    	'user_id'
    ];
}
