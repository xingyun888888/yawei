<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    //
	public function index(){
	
	  return view("admin.service")->with(array("title"=>"服务"));
	}

	public function add(){
	
	
	}
}
