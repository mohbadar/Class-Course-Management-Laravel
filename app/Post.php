<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //belogsTo user
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
