<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselModel extends Model
{
    //
	
	  //指定别的表名
     public $table = 'carousel';
	 public $timestamps = false;
	 protected $fillable = array('id', 'url', 'title','describe');
}
