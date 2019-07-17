<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function passport()
    {
    	return $this->hasOne(passport::class); // first way
     // return $this->hasOne('App\passport');  // secound way
     // get child information with parent id.
     // Eloquent determines the foreign key of the relationship based on the model name. In this case, the Phone model is automatically assumed to have a user_id foreign key.	
    		
    }

    public function mobile()
    {
    	return  $this->hasMany(mobile::class);
    }
}
