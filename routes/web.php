<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', "IndexController@index");

Route::get('/index',"IndexController@index");


Route::get('/service',"ServiceController@index");
Route::get('/contact',"ConcatController@index");
Route::get('/about',"AboutController@index");
Route::get('/portfolio',"PortfolioController@index");

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('upload', 'StudentController@upload');
Route::any('mail', 'StudentController@mail');
Route::any('cache1', 'StudentController@cache1');
Route::any('cache2', 'StudentController@cache2');
Route::any('queue', 'StudentController@queue');
Route::any('error', 'StudentController@error');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin',
	'middleware' => "auth"
	],function() {

    //Route::get('user/index', ['uses' => 'UserController@index', 'as' => 'a-u-i']);
    /*Route::get('user/index', ['uses' => 'UserController@index'])->name('a-u-i');
    Route::get('user/create', 'UserController@create');*/
	Route::get("/index",function(){
	    return view("admin.index")->with("title","首页");
	});

    Route::get("/carousel","CarouselController@index");
    Route::post("/carousel/add","CarouselController@add");
    Route::get("/carousel/add",function(){
	   return view("/admin/carouselEdit")->with("title","编辑");
	}); 
	Route::post("/carousel/update","CarouselController@update");
    Route::get("/carousel/remove/{id}","CarouselController@remove");


   

    
    Route::get("/intro","IntroController@index");
    Route::post("/intro/add","IntroController@add");
    Route::get("/intro/add",function(){
	   return view("/admin/introEdit")->with("title","编辑");
	}); 
	Route::post("/intro/update","IntroController@update");
    Route::get("/intro/remove/{id}","IntroController@remove");



     
	Route::get("/article",function(){
	    return view("admin.article")->with("title","文章管理");
	});

	Route::get("/portfolio","PortfolioController@index");
	Route::post("/portfolio/upload","PortfolioController@upload");
	Route::get("/portfolio/remove/{id}","PortfolioController@remove");



	Route::get("/concat","ConcatController@index");
	Route::post("/concat/update/{id}","ConcatController@update");

	Route::get("/service","ServiceController@index");
    Route::post("/service/add","ServiceController@add");
    Route::get("/service/add",function(){
	   return view("/admin/serviceEdit")->with("title","编辑");
	});
	Route::post("/service/update","ServiceController@update");
    Route::get("/service/remove/{id}","ServiceController@remove");

	
	Route::get("/home_small_img","HomeSmallImgController@index");
    Route::post("/home_small_img/add","HomeSmallImgController@add");
    Route::get("/home_small_img/add",function(){
	   return view("/admin/homeSmallImgEdit")->with("title","编辑");
	});
	Route::post("/home_small_img/update","HomeSmallImgController@update");
    Route::get("/home_small_img/remove/{id}","HomeSmallImgController@remove");

	
	Route::get("/client","ClientController@index");
    Route::post("/client/add","ClientController@add");
    Route::get("/client/add",function(){
	   return view("/admin/clientEdit")->with("title","编辑");
	});
	Route::post("/client/update","ClientController@update");
    Route::get("/client/remove/{id}","ClientController@remove");


    Route::get("/team","TeamController@index");
	Route::post("/team/upload","TeamController@upload");
	Route::get("/team/remove/{id}","TeamController@remove");

});
