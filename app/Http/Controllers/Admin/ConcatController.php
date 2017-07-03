<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class ConcatController extends Controller
{
    //
	public function index(){
	  $concat = DB::select("select * from concat limit 0,1");

	  return view("/admin/concat")->with(["title"=>"联系我们","concat"=>$concat]);
	
	}

	public function update(Request $request,$id){
	   
	   $bool = DB::update('update concat set address= ? , telphone = ? , email = ? where id = ? ',[$request->address,$request->telphone,$request->email,$id]);

	   return back();
	}
}
