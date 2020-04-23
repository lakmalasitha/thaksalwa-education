<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveSessionData extends Model
{
    protected $table = 'live_session_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'teacher_id', 'channel_id','subject_name', 'grade','stream','medium'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}