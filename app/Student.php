<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function lecturer() {
        return $this->hasMany('App\Lecturer');
    }
    
    public function course() {
        return $this->hasMany('App\Course');
    }
}
