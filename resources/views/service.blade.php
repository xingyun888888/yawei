@extends("layouts/header")
@section("carousel")
  <div></div>
@endsection
@section("content")
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

        <div class="container">
            <div class="empty-space col-xs-b60 col-sm-b120"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>我们的服务</h3>
                        <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
            @foreach($services as $item)
            <div class="services-shortcode-1">
                <div class="preview-wrapper">
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="preview">
                        <span class="text-mask" style="background-image: url({{$item->service_img}});"><span class="text"><span class="text-align" data-letter="C"></span></span></span>
                    </div>
                </div>
                <div class="content">
                    <div class="align">
                        <div class="sl">{{$item->service_smalltitle}}</div>
                        <div class="sa">
                            <h4 class="h4 title">{{$item->service_describe}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      <!--       <div class="services-shortcode-1 style-1">
                <div class="preview-wrapper">
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="preview">
                        <span class="text-mask" style="background-image: url(img/thumbnail-67.jpg);"><span class="text"><span class="text-align" data-letter="T"></span></span></span>
                    </div>
                </div>
                <div class="content">
                    <div class="align">
                        <div class="sl">Design / Branding</div>
                        <div class="sa">
                            <h4 class="h4 title">Marketing and modern brands</h4>
                            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab ill inventore veritatis et quasi architecto beatae vita dicta sunt, explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-shortcode-1">
                <div class="preview-wrapper">
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="preview">
                        <span class="text-mask" style="background-image: url(img/thumbnail-68.jpg);"><span class="text"><span class="text-align" data-letter="U"></span></span></span>
                    </div>
                </div>
                <div class="content">
                    <div class="align">
                        <div class="sl">Graphic design / Illustration </div>
                        <div class="sa">
                            <h4 class="h4 title">Unite of Graphic and Design</h4>
                            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab ill inventore veritatis et quasi architecto beatae vita dicta sunt, explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-shortcode-1 style-1">
                <div class="preview-wrapper">
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                    <div class="preview">
                        <span class="text-mask" style="background-image: url(img/thumbnail-69.jpg);"><span class="text"><span class="text-align" data-letter="P"></span></span></span>
                    </div>
                </div>
                <div class="content">
                    <div class="align">
                        <div class="sl">Typography / Branding</div>
                        <div class="sa">
                            <h4 class="h4 title">Posters and Art Typography</h4>
                            <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab ill inventore veritatis et quasi architecto beatae vita dicta sunt, explicabo.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>我们可以提供什么</h3>
                        <p>Nemo enim ipsam voluptatem, quia voluptas sit</p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="row">
            @foreach($offers as $item)
                <div class="col-sm-4">
                    <div class="services-shortcode-2">
                        <div class="icon"><img src="{{$item->offer_img}}" alt="" /></div>
                        <div class="sl">{{$item->offer_author}}</div>
                        <div class="content">
                            <div class="sa middle">
                                <h6>{{$item->offer_title}}</h6>
                                <p>{{$item->offer_describe}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
              <!--   <div class="col-sm-4">
                    <div class="services-shortcode-2">
                        <div class="icon"><img src="img/icon-3.png" alt="" /></div>
                        <div class="sl">Design / Branding</div>
                        <div class="content">
                            <div class="sa middle">
                                <h6>Development process</h6>
                                <p>Lorem ipsum dolor sit amet, amit consecte tur adipiscing elit, sed do eiusmod tempor incididunt ut sit labore et dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services-shortcode-2">
                        <div class="icon"><img src="img/icon-4.png" alt="" /></div>
                        <div class="sl">Design / Branding</div>
                        <div class="content">
                            <div class="sa middle">
                                <h6>Development process</h6>
                                <p>Lorem ipsum dolor sit amet, amit consecte tur adipiscing elit, sed do eiusmod tempor incididunt ut sit labore et dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
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