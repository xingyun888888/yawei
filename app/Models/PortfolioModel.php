<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    
	  //指定别的表名
     public $table = 'portfolio';
	 public $timestamps = false;
	 protected $fillable = array('id', 'portfolio_img_url', 'portfolio_title');

}
