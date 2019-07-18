<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    public function comment()
    {
    	return $this->morphOne('App\comment','commentable');
    }
}
