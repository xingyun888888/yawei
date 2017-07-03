<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntroModel extends Model
{
    //
	 protected $table = 'intro';
	 
     protected $primaryKey = 'id';
    
	 
     protected $fillable = ['intro_url','intro_title',"intro_content"]; //表字段  
     public $timestamps=false; //时间戳  
}
