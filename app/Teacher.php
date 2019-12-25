<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function advertisement(){

        return $this->hasMany(AddAdvertisement::class);
        
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}