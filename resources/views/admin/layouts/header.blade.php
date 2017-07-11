<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yawei-后台管理</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/backend.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="header">
      <div class="logo"></div>
      <div class="h-r">
        欢迎您！<span class="adminame">yawei</span>
        <a href="###" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-log-out"></span>&nbsp;退出</a>
      </div>
      <div class="h-nav">
        <ol class="breadcrumb">
          <span class="glyphicon glyphicon-home"></span>
          <li><a href="index.html">管理首页</a></li>
          <li class="active">{{$title}}</li>
        </ol>
      </div>
    </div>
    
    <div class="content">
        <div class="cleft">
          <ul>
            <!-- <li><a href="/admin/index"><span class="glyphicon glyphicon-user"></span>用户管理</a></li> -->
            <li><a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="{{Request::path()=='admin/index'?'active':''}}><span class="glyphicon glyphicon-picture"></span>首页 <b class="caret"></b></a></li>
            <li id="collapseOne" class="panel-collapse collapse son">
               <a href="/admin/carousel" class="{{Request::path()=='admin/carousel'?'active':''}}">轮播图</a>
               <a href="/admin/home_small_img" class="{{Request::path()=='admin/home_small_img'?'active':''}}">底部小图</a>
             <!--   <a href="huodong_over.html">背景图</a>
               <a href="huodong_daishen.html">小图</a>
               <a href="huodong_pingjia.html">底部</a> -->
            </li>
            <li><a href="/admin/portfolio" class="{{Request::path()=='admin/portfolio'?'active':''}}"><span class="glyphicon glyphicon-tag"></span>作品展</a></li>
            <li><a href="{{url('/admin/concat')}}" class="{{Request::path()=='admin/concat'?'active':''}}"><span class="glyphicon glyphicon-usd"></span>联系我们</a></li>
            <li><a href="{{url('/admin/service')}}"><span class="glyphicon glyphicon-th-large"></span>服务</a></li>
            <!-- <li><a href="news.html"><span class="glyphicon glyphicon-list-alt"></span>官方新闻</a></li> -->
             <li><a  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="{{Request::path()=='admin/us'?'active':''}}"><span class="glyphicon glyphicon-picture"></span>关于我们 <b class="caret"></b></a></li>
            <li id="collapseTwo" class="panel-collapse collapse son">
               <a href="{{url('/admin/team')}}">团队成员</a>
               <a href="{{url('/admin/intro')}}">团队介绍</a>
               <a href="{{url('/admin/client')}}">我们的客户</a>
            </li>
            <li><a href="/admin/article"  data-url="{{Request::path()}}"  class="{{Request::path()=='admin/article'?'active':''}}"><span class="glyphicon glyphicon-file"></span>文章管理</a></li>
          </ul>
        </div>
		 @yield('content')
	</div>
  </body>
</html>