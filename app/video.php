<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'post' => 'App\post',
    'video' => 'App\video',
]);

class video extends Model
{
    public function comment()
    {
    	return $this->morphOne('App\comment','commentable');
    }
    public function tags()
    {
       return $this->morphToMany('App\tag', 'taggable');
    } 	
}
