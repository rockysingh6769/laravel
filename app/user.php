<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function passport()
    {
    	return $this->hasOne(passport::class); // first way
     // return $this->hasOne('App\passport');  // secound way
     // get child information with parent id
    		
    }
}
