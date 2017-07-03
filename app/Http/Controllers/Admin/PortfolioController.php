<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use DB;
use App\Http\Requests;

class PortfolioController extends Controller{
	private $imgurl;
    // 文件上传方法
    public function upload(Request $request)
    {
		
        if ($request->isMethod('post')) {
            $file = $request->file("picture");
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
				//$portfolioModel = new \App\Models\PortfolioModel();
				//DB:table('portfolio')->insert(['id'=>NULL,'portfolio_img_url' => $filename, 'portfolio_title' => $request->title]);
                 DB::insert('insert into portfolio (id, portfolio_img_url, portfolio_title) values (?,?,?)', [NULL, '/uploads/'.$filename,$request->title]);
                
            }
		
			return back();
        }
    }

	public function index(){
	  $portfolio=DB::select("select * from portfolio");   
	  //dd($portfolio);
	  return view("/admin/portfolio")->with(['title'=>"作品展",'portfolio'=>$portfolio]);	
	}

	public function remove($id){
	  $portfolio=DB::select("delete from portfolio where id = ?",[$id]);   
	  return back();
	  //dd($portfolio);
	 // return view("/admin/portfolio")->with(['title'=>"作品展",'portfolio'=>$portfolio]);
         //echo $id;
    }
}