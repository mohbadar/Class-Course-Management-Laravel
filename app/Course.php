<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //belongsTo user
    public function user()
    {
    	return $this->belongsTo('App\User');
    }


    ///has many lectures
    public function lectures()
    {
    	return $this->hasMany('App\Lecture');
    }
}
