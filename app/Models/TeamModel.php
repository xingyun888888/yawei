<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    //
     public $table = 'team';
	 public $timestamps = false;
	 protected $fillable = array('id', 'team_img', 'team_title','service_describe');
}

