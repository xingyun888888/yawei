<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\IntroModel;

class IntroController extends Controller
{
    //
    $intros = IntroModel::All();
}
