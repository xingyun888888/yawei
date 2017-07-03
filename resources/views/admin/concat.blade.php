@extends("admin.layouts.header")

@section("content")
 
<div class="cright">
 <form action="{{url('/admin/concat/update/'.$concat[0]->id)}}" method="post">
	  <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
  	  <div class="form-group">
  		<label for="telphone">电话</label>
  		<input type="text" class="form-control" name="telphone" placeholder="telphone" value="{{$concat[0]->telphone}}">
  	  <div class="form-group">
  		<label for="email">邮箱</label>
  		<input type="email" class="form-control" name="email" placeholder="Email" value="{{$concat[0]->email}}">
  	  </div>
  	  <div class="form-group">
  		<label for="address">地址</label>
  		<input type="text" class="form-control" name="address" placeholder="address" value="{{$concat[0]->address}}">
  	  </div>
  	  </div>
  	  <button type="submit" class="btn btn-primary">保存</button>
  	  <button type="reset" class="btn btn-info">重置</button>
  </form>
</div>


@endsection