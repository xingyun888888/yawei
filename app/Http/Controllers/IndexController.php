<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\CarouselModel;

use App\Models\HomeSmallImgModel;

use App\Models\HomeBigImgModel;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function index(){
        $carousels = CarouselModel::All(); 
        $homeSmallImgs = HomeSmallImgModel::All();
        $homeBigImgs = HomeBigImgModel::All();
        return view("index")->with(["carousels"=>$carousels,"homeSmallImgs"=>$homeSmallImgs,"homeBigImgs"=>$homeBigImgs]);
    }
}
