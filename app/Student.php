<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function studentpost(){

        return $this->hasMany(StudentPost::class);
        
    }

    public static function returnStudentId ($id){
        $studentId = Student::where('user_id', $id)->first();
        if($studentId){
            return $studentId->id;
        }else{
            return null;
        }
    }
    
}
