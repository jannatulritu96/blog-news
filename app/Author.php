<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function relPosts()
		{
			return $this->hasMany('App\Post','author_id','id');
		}
	
	
}
