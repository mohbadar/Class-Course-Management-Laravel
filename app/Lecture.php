<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //belongsTo course
    public function course(){
    	return $this->belongsTo('App\Course');
    }

        ///has many files
    public function files()
    {
    	return $this->hasMany('App\File');
    }
}
