<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcatModel extends Model
{
    //
	  //指定别的表名
     public $table = 'concat';
	 public $timestamps = false;
	 protected $fillable = array('id', 'address', 'telphone','email');
}
