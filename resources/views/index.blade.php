@extends("layouts/header")
@section("carousel")
    <!-- LOADER -->
    <div id="loader-wrapper"></div>
@endsection
@section("content")
    <div id="content-block">

        <div class="fixed-background" style="background-image: url(img/background-2.jpg);">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url(img/background-2_.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align">
                                <h1 class="h1 light">AS.DESIGN</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="empty-space col-xs-b60 col-sm-b120"></div>
            <div class="text-center">
                <img class="thumbnail-image col-xs-b20" src="img/thumbnail-46.jpg" alt="" />
                <h6 class="h6 col-xs-b10">Your title image</h6>
                <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
            </div>
            <div class="empty-space empty-space col-xs-b25 col-sm-b50"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-center">
                        <img class="thumbnail-image col-xs-b20" src="img/thumbnail-47.jpg" alt="" />
                        <h6 class="h6 col-xs-b10">Your title image</h6>
                        <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
                    </div>
                    <div class="empty-space empty-space col-xs-b25 col-sm-b50"></div>
                </div>
                <div class="col-sm-6">
                    <div class="text-center">
                        <img class="thumbnail-image col-xs-b20" src="img/thumbnail-48.jpg" alt="" />
                        <h6 class="h6 col-xs-b10">Your title image</h6>
                        <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
                    </div>
                    <div class="empty-space empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="swiper-entry">
                <div class="swiper-container" data-autoplay="3000">
                    <div class="swiper-button-prev hidden"></div>
                    <div class="swiper-button-next hidden"></div>
                    <div class="swiper-wrapper">
                    @foreach($carousels as $item )
                        <div class="swiper-slide"> 
                            <div class="text-center">
                                <img class="thumbnail-image col-xs-b20" src="{{$item->url}}" alt="" />
                                <h6 class="h6 col-xs-b10">{{$item->title}}</h6>
                                <div class="sa middle">{{$item->describe}}</div>
                            </div>
                        </div>
                    @endforeach    
                   <!--      <div class="swiper-slide"> 
                            <div class="text-center">
                                <img class="thumbnail-image col-xs-b20" src="img/thumbnail-49.jpg" alt="" />
                                <h6 class="h6 col-xs-b10">Your title image</h6>
                                <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="text-center">
                                <img class="thumbnail-image col-xs-b20" src="img/thumbnail-46.jpg" alt="" />
                                <h6 class="h6 col-xs-b10">Your title image</h6>
                                <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="text-center">
                                <img class="thumbnail-image col-xs-b20" src="img/thumbnail-49.jpg" alt="" />
                                <h6 class="h6 col-xs-b10">Your title image</h6>
                                <div class="sa middle">Et harum quidem rerum facilis est et expedita distinctio.</div>
                            </div>
                        </div> -->
                    </div>
                    <div class="swiper-pagination relative-pagination"></div>
                </div>
            </div>
            <div class="empty-space col-xs-b60 col-sm-b120"></div>
        </div>

        <div class="row m0">
        @foreach($homeSmallImgs as $item)
            <div class="col-sm-4">
                <a class="thumbnail-shortcode-3 mouseover-1" href="#">
                    <img src="{{$item->home_small_img}}" alt="" />
                    <img src="{{$item->home_small_img}}" alt="" />
                    <span class="content">
                        <span class="sl light">{{$item->home_small_img_small_title}}</span>
                        <span class="title h4 light">{{$item->home_small_img_big_title}}</span>
                    </span>
                </a>
            </div>
        @endforeach    
     <!--        <div class="col-sm-4">
                <a class="thumbnail-shortcode-3 mouseover-1" href="#">
                    <img src="img/thumbnail-57.jpg" alt="" />
                    <img src="img/thumbnail-57.jpg" alt="" />
                    <span class="content">
                        <span class="sl light">Fashion / Photoshooting</span>
                        <span class="title h4 light">Great colours of  wild wind</span>
                    </span>
                </a>
            </div>
            <div class="col-sm-4">
                <a class="thumbnail-shortcode-3 mouseover-1" href="#">
                    <img src="img/thumbnail-58.jpg" alt="" />
                    <img src="img/thumbnail-58.jpg" alt="" />
                    <span class="content">
                        <span class="sl light">Fashion / Photoshooting</span>
                        <span class="title h4 light">Great colours of  wild wind</span>
                    </span>
                </a>
            </div> -->
        </div>

        <!-- FOOTER -->
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
    </div>

    <div class="popup-wrapper">
        <div class="bg-layer"></div>

        <div class="popup-content" data-rel="1">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Log in</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" value="" type="text" placeholder="Your email" />
                        <span></span>
                    </div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" type="password" value="" placeholder="Enter password" />
                        <span></span>
                    </div>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b5"></div>
                            <a class="simple-link open-popup" data-rel="3">Forgot password?</a>
                            <div class="empty-space col-xs-b5"></div>
                            <a class="simple-link open-popup" data-rel="2">Register now</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="button">submit<input type="submit"/></div>  
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content" data-rel="2">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Register</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" value="" type="text" placeholder="Your name" />
                        <span></span>
                    </div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" value="" type="text" placeholder="Your email" />
                        <span></span>
                    </div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" type="password" value="" placeholder="Enter password" />
                        <span></span>
                    </div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" type="password" value="" placeholder="Repeat password" />
                        <span></span>
                    </div>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <div>
                                <label class="sc">
                                    <input type="checkbox"><span>I agree with <a href="#">terms of use</a></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="button">register<input type="submit"/></div>  
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content" data-rel="3">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Reset your password</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <div class="simple-input-wrapper">
                        <input class="simple-input" value="" type="text" placeholder="Your email" />
                        <span></span>
                    </div>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="text-center">
                        <div class="button">reset<input type="submit"/></div> 
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

    </div>

    <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div>

    <script src="/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script src="/js/swiper.jquery.min.js"></script>
    <script src="/js/global.js"></script>

    <script src="/js/isotope.pkgd.min.js"></script>
@endsection