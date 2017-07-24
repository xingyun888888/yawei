<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientModel;

use App\Models\IntroModel;

use App\Models\TeamModel;

use App\Http\Requests;

class AboutController extends Controller
{
    //
    public function index(){

       $clients = ClientModel::All();
       $intros = IntroModel::All();
       $teams = TeamModel::All();

    	return view("about")->with(["clients"=>$clients,"intros"=>$intros,"teams"=>$teams]);
    }
}
