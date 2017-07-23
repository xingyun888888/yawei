@extends("layouts/header")

@section("carousel")
    <div id="loader-wrapper"></div>
@endsection
@section("content")
    <div id="content-block">

        <div class="container-fluid">

            <div class="empty-space col-xs-b40 col-sm-b80"></div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>Our Works</h3>
                        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium. </p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="sorting-menu">
                        <div class="title">All</div>
                        <div class="toggle">
                            <a class="active" data-filter="*"><span class="text">All</span><span class="number">184</span></a>
                            <a data-filter=".filter-1"><span class="text">Branding</span><span class="number">34</span></a>
                            <a data-filter=".filter-2"><span class="text">Typography</span><span class="number">25</span></a>
                            <a data-filter=".filter-3"><span class="text">Logo</span><span class="number">18</span></a>
                            <a data-filter=".filter-4"><span class="text">Marketing</span><span class="number">40</span></a>
                            <a data-filter=".filter-5"><span class="text">Graphic Design</span><span class="number">67</span></a>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            

            <div class="sorting-container portfolio-3">
                <div class="grid-sizer w50"></div>
                @foreach($portfolios as $index=>$item)
                <div class="sorting-item w50 filter-{{$index+1}}">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="{{$item->portfolio_img_url}}">
                            <img class="preview" src="{{$item->portfolio_img_url}}" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">{{$item->portfolio_title}}</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach

  <!--               <div class="sorting-item w50 filter-2">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="img/thumbnail-71.jpg">
                            <img class="preview" src="img/thumbnail-71.jpg" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">Sense the spirit of Asian culture.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="sorting-item w50 filter-3">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="img/thumbnail-72.jpg">
                            <img class="preview" src="img/thumbnail-72.jpg" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">Sense the spirit of Asian culture.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="sorting-item w50 filter-4">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="img/thumbnail-73.jpg">
                            <img class="preview" src="img/thumbnail-73.jpg" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">Sense the spirit of Asian culture.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="sorting-item w50 filter-5">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="img/thumbnail-74.jpg">
                            <img class="preview" src="img/thumbnail-74.jpg" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">Sense the spirit of Asian culture.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-3">
                        <a class="lightbox" href="img/thumbnail-75.jpg">
                            <img class="preview" src="img/thumbnail-75.jpg" alt="" />
                            <span class="portfolio-hover-3">
                                <span class="bg-layer"></span>
                                <span class="frame-layer"></span>
                                <span class="align">
                                    <span class="title h3 light">Sense the spirit of Asian culture.</span>
                                </span>
                            </span>
                        </a>
                    </div>
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

    <!-- lightbox -->
    <link href="/css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <script src="/js/simple-lightbox.min.js"></script>
@endsection