<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function teacherposts(){

        return $this->hasMany(TeacherPost::class);
        
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function returnTeacherId ($id){
        $teacherId = Teacher::where('user_id', $id)->first();
        if($teacherId){
            return $teacherId->id;
        }else{
            return null;
        }
    }
}
