<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferModel extends Model
{
    //
     public $table = 'offer';
	 public $timestamps = false;
	 protected $fillable = array('id', 'offer_img',"offer_author", 'offer_title','offer_describe');
}
