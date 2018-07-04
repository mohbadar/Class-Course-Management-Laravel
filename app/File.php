<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //belongsTo lecture
    public function lecture()
    {
    	return $this->belongsTo('App\Lecture');
    }

}
