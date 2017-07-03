<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <style>
        #map-canvas{
            vertical-align: middle
        }
        @media (max-width: 900px) {
            .cell-view {
                height:auto!important;
            }
            #map-canvas{
                margin-top: 0;
            }
        }
    </style>
  	<title>ASD</title>
</head>
<body>
    <!-- LOADER -->
    <div id="loader-wrapper"></div>
    <!-- HEADER -->
    <header class="type-3 transparent">
	    @extends('layouts.header')
    </header>
    <div id="content-block">
        <div class="fixed-background" style="background-image: url(img/background-4.jpg);">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url(img/background-4_.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="align">
                                <h1 class="h1 light">Explore what we can offer for you</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wide">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-lg-offset-1">
                    <div class="cell-view full-screen-height text-center">
                        <div class="empty-space col-xs-b30"></div>
                        <article class="sa">
                            <h3>Contact Us</h3>
                            <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </article>
                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        <div class="sa col-xs-b10">
                            <b>Tel.:</b> <a href="">+626 460 4061</a><br/>
                        </div>
                        <div class="sa col-xs-b10">
                            <b>Adress:</b> 350 West Erie Street<br/>
                        </div>
                        <div class="sa col-xs-b10">
                            <b>Email:</b> <a href="mailto:hello@tdhcreative.com">hello@tdhcreative.com</a>
                        </div>
                    </div>
                </div>
                <div id="map-canvas" class="col-md-12 col-lg-7"></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-text-center col-md-text-left">
                    <div class="copyright sa small">&copy; 2016 All rights reserved. Development by <a href="" target="_blank"><b>UnionAgency</b></a>.</div>
                    <div class="col-xs-b15 visible-xs visible-sm"></div>
                </div>
                <div class="col-md-6 col-xs-text-center col-md-text-right">
                    <div class="follow style-1">
                        <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script src="/js/swiper.jquery.min.js"></script>
    <script src="/js/global.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>
    <script type="text/javascript">
        $(function () {
            ShowMap('114.066596,22.568951', '亚淮设计', '雕塑家园1517', '0755-888888888', '0755-888888888', '20');
        })
        function getInfo(id) {
            $.ajax({
                type: "POST",
                url: "WebUserControl/Contact/GetInfo.ashx",
                cache: false,
                async: false,
                data: { ID: id },
                success: function (data) {
                    data = eval(data);
                    var length = data.length;
                    if (length > 0) {
                        ShowMap(data[0]["Image"], data[0]["NewsTitle"], data[0]["Address"], data[0]["Phone"], data[0]["NewsTags"], data[0]["NewsNum"]);
                    }
                }
            });
        }
        function ShowMap(zuobiao, name, addrsee, phone, chuanzhen, zoom) {
            var arrzuobiao = zuobiao.split(',');
            var map = new BMap.Map("map-canvas");
            map.centerAndZoom(new BMap.Point(arrzuobiao[0], arrzuobiao[1]), zoom);
            map.addControl(new BMap.NavigationControl());
            var marker = new BMap.Marker(new BMap.Point(arrzuobiao[0], arrzuobiao[1]));
            map.addOverlay(marker);
            var infoWindow = new BMap.InfoWindow('<p style="color: #bf0008;font-size:14px;">' + name + '</p><p>地址：' + addrsee + '</p><p>电话：' + phone + '</p><p>传真：' + chuanzhen + '</p>');
            marker.addEventListener("click", function () {
                this.openInfoWindow(infoWindow);
            });
            marker.openInfoWindow(infoWindow);
        }
    </script>
</body>
</html>