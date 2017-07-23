@extends("admin/layouts/header")


@section("content")
  
  <div class="cright">
     <form  action="{{url('/admin/client/add')}}" method="post"  enctype="multipart/form-data"  >
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  <div class="form-group">
		<label for="picture">图片上传</label>
		<input type="file" id="picture" name="picture">
	  </div>
	  <div class="form-group">
		<label for="title">标题</label>
		<input type="text" class="form-control" id="title" placeholder="图片标题" name="title">
	  </div>
	  <button type="submit" class="btn btn-primary">保存</button>
	  <button type="reset" class="btn btn-info">重置</button>
	</form>
  
  </div>
@endsection