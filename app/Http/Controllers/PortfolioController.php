<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PortfolioModel;

use App\Http\Requests;

class PortfolioController extends Controller
{
    //
    public function index(){
      
      $portfolios = PortfolioModel::All();

      return view("portfolio")->with(Array("portfolios"=>$portfolios));
    }

}
