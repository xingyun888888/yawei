<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ConcatModel;

use App\Http\Requests;

class ConcatController extends Controller
{
    //
    public function index(){

    	$contact = ConcatModel::find(1);
    	return view("contact")->with(Array("contact"=>$contact));
    }
}
