@extends("layouts.header")

@section("carousel")
    <div id="loader-wrapper"></div>

@endsection    
@section("content")
    <div id="content-block">

        <div class="fixed-background" style="background-image: url(img/background-3.jpg);">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url(img/background-3_.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align">
                                <h1 class="h1 light">Meet our nowadays team</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="empty-space col-xs-b60 col-sm-b120"></div>
            <div class="row vertical-aligned-columns">
                <div class="col-sm-7 col-sm-push-5 col-xs-b30 col-sm-b0">
                    <div class="thumbnail-shortcode-4">
                        <div class="content">
                            <div class="layer-1 background" style="background-image: url(img/thumbnail-59.jpg);"></div>
                            <div class="layer-2 border border-image" style="border-image-source: url(img/thumbnail-60.jpg);"></div>
                            <div class="layer-3 background" style="background-image: url(img/thumbnail-61.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="sa">
                        <h3>Give us a task &amp; we'll imlement it</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
                        <p>Sed ut perspiciatis, unde omnis iste natus error sit volue iste accusantium doloremque laudantium,totam rem aperia, quae ab illo inventore veritatis et quasi architecto beatae explicabo Nemo enim ipsam voluptatem, quia.</p>
                    </div>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>我们的团队</h3>
                        <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="swiper-entry">
                <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="3" data-slides-per-view="3" data-space="30">
                    <div class="swiper-button-prev hidden"></div>
                    <div class="swiper-button-next hidden"></div>
                    <div class="swiper-wrapper">
                    @foreach($teams as $item)
                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url({{$item->team_img}});"></div>
                                    <div class="layer-2"><img src="{{$item->team_img}}" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">{{$item->team_title}}</h6>
                                    <div class="sa small">{{$item->team_describe}}</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                   <!--      <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url(img/thumbnail-63.jpg);"></div>
                                    <div class="layer-2"><img src="img/thumbnail-transparent-2.png" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">Mark Raily</h6>
                                    <div class="sa small">Project Director</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url(img/thumbnail-64.jpg);"></div>
                                    <div class="layer-2"><img src="img/thumbnail-transparent-3.png" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">Stefany Jacobs</h6>
                                    <div class="sa small">Graphic Designer</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url(img/thumbnail-62.jpg);"></div>
                                    <div class="layer-2"><img src="img/thumbnail-transparent-1.png" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">Linda Otis</h6>
                                    <div class="sa small">Manager</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url(img/thumbnail-63.jpg);"></div>
                                    <div class="layer-2"><img src="img/thumbnail-transparent-2.png" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">Mark Raily</h6>
                                    <div class="sa small">Project Director</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url(img/thumbnail-64.jpg);"></div>
                                    <div class="layer-2"><img src="img/thumbnail-transparent-3.png" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title">Stefany Jacobs</h6>
                                    <div class="sa small">Graphic Designer</div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="swiper-pagination relative-pagination"></div>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
            <div class="swiper-entry">
                <div class="swiper-button-prev visible-lg"></div>
                <div class="swiper-button-next visible-lg"></div>
                <div class="swiper-container" data-space="30">
                    <div class="swiper-wrapper">
                    @foreach($intros as $item)
                        <div class="swiper-slide">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-7 col-xs-b30 col-sm-b0">
                                    <div class="thumbnail-shortcode-6">
                                        <div class="content">
                                            <div class="layer-1 border border-image" style="border-image-source: url(img/thumbnail-65.jpg);"></div>
                                            <div class="layer-2 background" style="background-image: url({{$item->intro_url}});"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="sa">
                                        <h3>{{$item->intro_title}}</h3>
                                        <p>{{$item->intro_content}}</p>
                                        <a class="button style-2" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                       <!--  <div class="swiper-slide">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-7 col-sm-push-5 col-xs-b30 col-sm-b0">
                                    <div class="thumbnail-shortcode-6">
                                        <div class="content">
                                            <div class="layer-1 border border-image" style="border-image-source: url(img/thumbnail-65.jpg);"></div>
                                            <div class="layer-2 background" style="background-image: url(img/thumbnail-66.jpg);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-pull-7">
                                    <div class="sa">
                                        <h3>We can focus users attention on your design</h3>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae itaque earum rerum.</p>
                                        <a class="button style-2" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="swiper-pagination relative-pagination hidden-lg"></div>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>我们的客户</h3>
                        <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="row">
            @foreach($clients as $item)
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="{{$item->client_img}}" alt="" /></a>
                </div>
            @endforeach    
               <!--  <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-2.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-3.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-4.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-5.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-6.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-7.jpg" alt="" /></a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="#" class="client-logo mouseover-2"><img src="img/client-logo-8.jpg" alt="" /></a>
                </div> -->
            </div>
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
@endsection("content")