@extends("admin/layouts/header")


@section("content")
  
  <div class="cright">
     <form  action="{{url('/admin/intro/add')}}" method="post"  enctype="multipart/form-data"  >
	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	  <div class="form-group">
		<label for="picture">团队介绍图片</label>
		<input type="file" id="picture" name="picture">
	  </div>
	  <div class="form-group">
		<label for="title">图片标题</label>
		<input type="text" class="form-control" id="title" placeholder="图片标题" name="title">
	  </div>
	  <div class="form-group">
		<label for="content">图片说明</label>		
	   <textarea class="form-control" rows="3" id="content" name="content" placeholder="一句话对图片进行描述..."></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">保存</button>
	  <button type="reset" class="btn btn-info">重置</button>
	</form>
  
  </div>
@endsection