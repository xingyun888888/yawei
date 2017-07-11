<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSmallImgModel extends Model
{
    //
	 public $table = 'homeSmallImg';
	 public $timestamps = false;
	 protected $fillable = array('id', 'home_small_img', 'heme_small_img_small_title','home_small_img_big_title');
}
