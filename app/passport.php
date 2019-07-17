<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
      
    public function user()
    {
         return $this->belongsTo(user::class); // first way
      // return $this->belongsTo('App\user'); // secound way
      // get parent information with child id
    }

}
