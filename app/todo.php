<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getTitleAttribute($value)
    { 
        return ucfirst($value);
        // after get funation name is column name in this is case column name is title
        // for first character show in capital 
        // it's called accessor
    }
    public function setTitleAttribute($value)
    { 
        return $this->attributes['title'] = ucfirst($value); 
        // for before insert in database make it in uppercase first character
        // it's  called mutators
    } 	
}
