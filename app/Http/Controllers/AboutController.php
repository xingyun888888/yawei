<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientModel;

use App\Http\Requests;

class AboutController extends Controller
{
    //
    public function index(){

       $clients = ClientModel::All();

    	return view("about")->with(["clients"=>$clients]);
    }
}
