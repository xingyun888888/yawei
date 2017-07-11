<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    //
	 public $table = 'service';
	 public $timestamps = false;
	 protected $fillable = array('id', 'service_img', 'service_smalltitle','service_bigtitle','service_describe');
}
