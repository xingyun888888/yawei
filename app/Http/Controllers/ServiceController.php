<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceModel;

use App\Http\Requests;

class ServiceController extends Controller
{
    //
    public function index(){
      
      $services = ServiceModel::All();

      return view("service")->with(Array("services"=>$services));
    }
}
