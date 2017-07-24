
   @extends("admin.layouts.header")

   @section("content")

     <div class="cright">
		 <div class="action" style="margin:20px;">      
			<button class="btn btn-success" type="submit" data-toggle="modal"  data-target=".modal">新增</button>
			<button class="btn btn-info" type="submit" id="checkall" data-check="true">全选</button>
		 </div>
		<div class="row">
        @for($i = 0; $i < count($teams); $i++)
		  <div class="col-sm-6 col-md-3 ">
			<div class="thumbnail text-center">
			  <!-- <img src="https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1498493557&di=9a872642d6fc4a09e0f30a39f811cab5&src=http://pic48.nipic.com/file/20140912/7487939_223919315000_2.jpg" alt="..."> -->
			  <img src="{{$teams[$i]->team_img}}" alt="" style="width:100%;height:150px;">
			  <div class="caption">
				<h4 style="">{{$teams[$i]->team_title}}</h4>
				<p>{{$teams[$i]->team_describe}}</p>
				<p>
				   <label>
                    <input type="checkbox" class="portfolio-select">
                   </label>
				   <a href="#" class="btn btn-primary" role="button">编辑</a> <a href="/admin/portfolio/remove/{{$teams[$i]->id}}" class="btn btn-danger" role="button">删除</a>
				</p>
			  </div>
			</div>
		  </div>
        @endfor
		</div>
	 </div>
	 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        
        <div class="modal-content">
		  <div class="container-fluid" style="padding:50px;">
            <form action="/admin/team/upload" method="post" enctype="multipart/form-data" >
			      <input type="hidden" name="_token"         value="{{csrf_token()}}"/>
				  <div class="form-group">
					<label for="ename">姓名</label>
					<input type="text" class="form-control" id="ename" name="title"  placeholder="请输入姓名">
				  </div>
				  <div class="form-group">
					<label for="position">职位</label>
					<input type="text" class="form-control" id="title" name="describe"  placeholder="请输入职位">
				  </div>
				  <div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile" name="picture">
					<p class="help-block">请上传成员照片</p>
				  </div>
				  <button type="submit" class="btn btn-primary">保存</button>
			</form>
		   </div>
        </div>
      </div>
    </div>
    <script>
		$(function(){
		  $('body').on('hidden.bs.modal', '.modal', function () {
		  $(this).removeData('bs.modal');
		});
		//全选
		$("#checkall").click(function(){
			console.log($(this).data("check"));
		  if($(this).data("check")){//全选
			$('.portfolio-select').prop("checked",true);
     
		  }else if(!$(this).data("check")){
			$('.portfolio-select').prop("checked",false);
		  }
		  $(this).data("check",!$(this).data("check"));
		});


		});
    </script>
        
   @endsection