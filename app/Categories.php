<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    public function article(){
    	return $this->belongsTo('App\Article');
    }
}
