
	@extends("admin.layouts.header")
	@section("content")
        <div class="cright">
           <table class="table table-striped table-hover">
            <form  action="#" method="post" class="form-inline">
              <tr><th colspan="2">文章标题</th><th>推荐值</th><th>发布人</th><th>发布时间</th><th>阅读量</th><th>操作</th></tr>

              <tr><td><input type="checkbox" /></td><td>习近平:中国人没有称王称霸穷兵黩武基因</td><td>10</td><td>张小二</td><td>2014-06-30 21:22</td><td>556</td><td><a href="http://news.baidu.com/" target="_blank">查看</a> | <a data-toggle="modal" href="news_edit.html" data-target=".modal" >修改</a> | <a href="###">删除</a></td></tr>

              <tr><td><input type="checkbox" /></td><td>习近平:中国人没有称王称霸穷兵黩武基因</td><td>10</td><td>张小二</td><td>2014-06-30 21:22</td><td>556</td><td><a href="http://news.baidu.com/" target="_blank">查看</a> | <a data-toggle="modal" href="news_edit.html" data-target=".modal" >修改</a> | <a href="###">删除</a></td></tr>
              <tr><td><input type="checkbox" /></td><td>习近平:中国人没有称王称霸穷兵黩武基因</td><td>10</td><td>张小二</td><td>2014-06-30 21:22</td><td>556</td><td><a href="http://news.baidu.com/" target="_blank">查看</a> | <a data-toggle="modal" href="news_edit.html" data-target=".modal" >修改</a> | <a href="###">删除</a></td></tr>
              <tr><td><input type="checkbox" /></td><td>习近平:中国人没有称王称霸穷兵黩武基因</td><td>10</td><td>张小二</td><td>2014-06-30 21:22</td><td>556</td><td><a href="http://news.baidu.com/" target="_blank">查看</a> | <a data-toggle="modal" href="news_edit.html" data-target=".modal" >修改</a> | <a href="###">删除</a></td></tr>
              <tr><td><input type="checkbox" /></td><td>习近平:中国人没有称王称霸穷兵黩武基因</td><td>10</td><td>张小二</td><td>2014-06-30 21:22</td><td>556</td><td><a href="http://news.baidu.com/" target="_blank">查看</a> | <a data-toggle="modal" href="news_edit.html" data-target=".modal" >修改</a> | <a href="###">删除</a></td></tr>

              <tr><td colspan="10">
                 <div class="checkbox" style="display: inline-block;">
                  <label id="checkall" id="checkall">
                    <input type="checkbox"> 全选
                  </label>
                </div>
                <button type="submit" class="btn btn-primary btn-xs">批量删除</button>
              </form>　
              <form class="form-inline" action="###" method="get" style="display:inline;">
                    <div class="input-group">
                      <input type="text" name="keyword" class="form-control input-sm" placeholder="请输入要查找的内容">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-sm" type="button">查找</button>
                      </span>
                    </div>
                </form>
              
              </td></tr>
              <tr><td class="page" colspan="10">
                 <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                  <li><a href="javascript:;" style="color:#999">共1256条数据 每页20条 页次1/56</a></li>
                </ul> 
              </td></tr>

           </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        
        <div class="modal-content">

        </div>
      </div>
    </div>

<script>
$(function(){
  $('body').on('hidden.bs.modal', '.modal', function () {
  $(this).removeData('bs.modal');
});
//全选
$("#checkall input").click(function(){
  if($(this).is(":checked")){//全选
    $('input[type=checkbox]').prop("checked",true);
  }else if(!$(this).is(":checked")){
    $('input[type=checkbox]').prop("checked",false);
  }
});


});
</script>
@endsection