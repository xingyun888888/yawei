@extends("admin/layouts/header")


@section("content")
  
  <div class="cright">
     <form  action="{{url('/admin/home_small_img/add')}}" method="post"  enctype="multipart/form-data"  >
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  <div class="form-group">
		<label for="picture">图片上传</label>
		<input type="file" id="picture" name="picture">
	  </div>
	  <div class="form-group">
		<label for="title">小标题</label>
		<input type="text" class="form-control" id="title" placeholder="图片标题" name="small_title">
	  </div>
	  <div class="form-group">
		<label for="title">大标题</label>
		<input type="text" class="form-control" id="title" placeholder="图片标题" name="big_title">
	  </div>
	  <button type="submit" class="btn btn-primary">保存</button>
	  <button type="reset" class="btn btn-info">重置</button>
	</form>
  
  </div>
@endsection