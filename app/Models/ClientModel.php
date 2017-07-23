<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    //
	public $table="client";
	public $timestamps = false;
	protected $fillable = array("id","client_img","client_title");
}
