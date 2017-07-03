<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

use App\Models\CarouselModel;

class CarouselController extends Controller
{
    //
	public function index(){
	
	  
	  $carousel = CarouselModel::all();
	  return view("/admin/carousel")->with(["title"=>"轮播图","carousel"=>$carousel]);
	}
    
	public function add(Request $request){	  
       if ($request->isMethod('post')) {
            $file = $request->file("picture");
            if($file)$url=$this->upload($file);
			$title=$request->title;
			$describe=$request->describe;
            
            $input = ["id"=>NULL,"url"=>$url,"title"=>$title,"describe"=>$describe];

			$post = CarouselModel::create($input);
            
			return redirect("/admin/carousel");
            echo $url,$title,$describe;
	   }
	}
	public function update(){
	   $carousel = CarouselModel::all();
	   //dd($carousel[0]=>attributes);
       foreach($carousel as $item){
	     var_dump($item->title);
	   }

	}

	public function remove(Request $request,$id){
	   $carousel = CarouselModel::find($id);
	   if($carousel->delete()){
	     echo "删除成功";
	   
	   }else{
	     echo "删除失败";
	   };
	   return back();
	}

	private function upload($file){
            // 文件是否上传成功
            if ($file->isValid()) {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg
                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));  
				
				if($bool)return '/uploads/'.$filename;
            }
	}
	public function get_client_ip()  
	{  
		if ($_SERVER['REMOTE_ADDR']) {  
		$cip = $_SERVER['REMOTE_ADDR'];  
		} elseif (getenv("REMOTE_ADDR")) {  
		$cip = getenv("REMOTE_ADDR");  
		} elseif (getenv("HTTP_CLIENT_IP")) {  
		$cip = getenv("HTTP_CLIENT_IP");  
		} else {  
		$cip = "unknown";  
		}  
		return $cip;  
	}  
	
}
