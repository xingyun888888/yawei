<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Storage;


use App\Models\ServiceModel;

use App\Http\Requests;

class ServiceController extends Controller
{
    //
	public function index(){
	
	  
	  $service = ServiceModel::all();
	  return view("/admin/service")->with(["title"=>"服务","service"=>$service]);
	}
    
	public function add(Request $request){	  
       if ($request->isMethod('post')) {
            $file = $request->file("picture");
            if($file)$url=$this->upload($file);
			$smalltitle=$request->small_title;
			$bigtitle=$request->big_title;
			$describe=$request->service_describe;
            
            $input = ["id"=>NULL,"service_img"=>$url,"service_smalltitle"=>$smalltitle,"service_bigtitle"=>$bigtitle,"service_describe"=>$describe];

			$post =ServiceModel::create($input);
            
			return redirect("/admin/service");
            echo $url,$title,$describe;
	   }
	}
	public function update(){
	   $service = ServiceModel::all();
	   //dd($carousel[0]=>attributes);
       foreach($servicee as $item){
	     var_dump($item->title);
	   }

	}

	public function remove(Request $request,$id){
	   $service = ServiceModel::find($id);
	   if($service->delete()){
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
