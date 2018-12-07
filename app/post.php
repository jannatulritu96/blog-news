<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
     protected $fillable = [
        'category_id', 'title', 'short_description','description','image','is_featured','total_hit','published_date','status'
    ];
}
