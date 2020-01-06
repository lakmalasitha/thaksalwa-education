<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function teacherpost(){

        return $this->hasMany(TeacherPost::class);
        
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
