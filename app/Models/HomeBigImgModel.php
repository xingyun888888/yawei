<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBigImgModel extends Model
{
    //
     public $table = 'homeBigImg';
	 public $timestamps = false;
	 protected $fillable = array('id', 'home_big_img', 'home_big_img_title','home_big_img_describe');
}
