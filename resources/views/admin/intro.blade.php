@extends("admin/layouts/header")

@section("content")

 <div class="cright">
	<div class="action" style="margin:20px;">      
			<a class="btn btn-success" href="/admin/intro/add">新增</a>
			<button class="btn btn-info" type="submit" id="checkall" data-check="true">全选</button>
	</div>
    <table class="table table-hover">
	<tr>
	   <th class="text-center">编号</th>
	   <th class="text-center">图片</th>
	   <th class="text-center">标题</th>
	   <th class="text-center">链接</th>
	   <th class="text-center">操作</th>
	</tr>
	@foreach($intro as $item)
	<tr class="active">         
	  <td class="active text-center">{{$item->id}}</td>
	  <td class="active text-center" style="width:200px;height:100px;">
	     <img src="{{$item->intro_url}}" alt="" style="width:100%;height:100%">
	  </td>
	  <td class="active text-center">{{$item->intro_title}}</td>
	  <td class="active text-center">{{$_SERVER['HTTP_HOST'].$item->intro_url}}</td>
	  <td class="active text-center">
	    <a href="{{url('/admin/intro/remove/'.$item->id)}}">删除</a>
	    <a href="{{url('/admin/intro/remove/'.$item->id)}}">查看</a>
	    <!-- <a href="/admin/intro/update">编辑</a> -->
	  </td>
    </tr>
	@endforeach
    </table>
  </div>
@endsection