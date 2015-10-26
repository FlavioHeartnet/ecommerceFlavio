@extends('master')

@section('conteudo')

<section class="hero-slider">
    <div class="master-slider" id="hero-slider">

        <!--Slide 1-->
        <div class="ms-slide" data-delay="7">
            <div class="overlay"></div>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_1.jpg')}}" alt="Nikon D4S"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nikon D4S</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
        </div>

        <!--Slide 2-->
        <div class="ms-slide" data-delay="7">
            <span class="overlay"></span>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_2.jpg')}}" alt="Nest"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nest</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="rotatebottom(30|90,long,br,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1640$</span>Buy it now</a></div>
        </div>

        <!--Slide 3-->
        <div class="ms-slide" data-delay="7">
            <div class="overlay"></div>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_3.jpg')}}" alt="3D Printer"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">3D Printer</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="left(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>2500$</span>Buy it now</a></div>
        </div>

    </div>
</section><!--Hero Slider Close-->

<!--Categories-->
<section class="cat-tiles">
    <div class="container">
        <h2>Browse categories</h2>
        <div class="row">
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/1.jpg')}}" alt="1"/>
                    <p>Category name</p>
                </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/2.jpg')}}" alt="2"/>
                    <p>Category name</p>
                </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/3.jpg')}}" alt="3"/>
                    <p>Category name</p>
                </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/4.jpg')}}" alt="4"/>
                    <p>Category name</p>
                </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/5.jpg')}}" alt="5"/>
                    <p>Category name</p>
                </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                    <img src="{{asset('img/categories/6.jpg')}}" alt="5"/>
                    <p>Category name</p>
                </a>
            </div>
        </div>
    </div>
</section><!--Categories Close-->

<!--Catalog Grid-->
<section class="catalog-grid">
<div class="container">
<h2 class="primary-color">Catalog picks</h2>
<div class="row">
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="badges">
            <span class="sale"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/1.jpg')}}" alt="1"/></a>
        <div class="footer">
            <a href="#">Nikon D5300</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="badges">
            <span class="out"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <div class="price-label old-price">920,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/2.jpg')}}" alt="2"/></a>
        <div class="footer">
            <a href="#">Nikon Coolpix</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="badges">
            <span class="best-seller"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/3.jpg')}}" alt="3"/></a>
        <div class="footer">
            <a href="#">Nikon WP-N3</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/4.jpg')}}" alt="4"/></a>
        <div class="footer">
            <a href="#">Nikkor 10-30 VR</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <div class="price-label old-price">920,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/5.jpg')}}" alt="5"/></a>
        <div class="footer">
            <a href="#">Nikon WU 1b</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/6.jpg')}}" alt="6"/></a>
        <div class="footer">
            <a href="#">Nikon V3</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/7.jpg')}}" alt="7"/></a>
        <div class="footer">
            <a href="#">Nikon J4</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{asset('img/catalog/tiles/8.jpg')}}" alt="8"/></a>
        <div class="footer">
            <a href="#">Nikkor AF-S</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section><!--Catalog Grid Close-->

@include('tab-precos')

<!--Posts/Twitter Widget-->
<section class="posts-widget">
    <div class="tw-bg"></div>
    <div class="container">
        <div class="row">
            <div class="latest-posts col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="extra-bold">Latests posts</h2>
                        <a class="btn btn-success btn-block" href="#">To blog</a>
                    </div>
                    <div class="col-lg-9">
                        <!--Post-->
                        <div class="post row">
                            <div class="col-lg-6 col-sm-6">
                                <a href="#"><img src="{{asset('img/posts-widget/1.jpg')}}" alt="1"/></a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <h3><a href="#">Another Title</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <div class="author"><i class="fa fa-user"></i><a href="#">By Bedismo</a></div>
                                <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (34)</a></div>
                            </div>
                        </div><!--Post End-->
                        <!--Post-->
                        <div class="post row">
                            <div class="col-lg-6 col-sm-6">
                                <a href="#"><img src="{{asset('img/posts-widget/2.jpg')}}" alt="2"/></a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <h3><a href="#">Awesome Title</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <div class="author"><i class="fa fa-user"></i><a href="#">By Jeddah</a></div>
                                <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (101)</a></div>
                            </div>
                        </div><!--Post End-->
                    </div>
                </div>
            </div>
            <div class="twitter-feed col-lg-4 col-md-4">
                <a class="tw-follow" href="https://twitter.com/8Guild" target="_blank">
                    <div class="button">Follow us<i class="fa fa-twitter"></i></div>
                    <h2 class="extra-bold">On Twitter <i class="fa fa-twitter"></i></h2>
                </a>
                <!--Tweet-->
                <div class="tweet">
                    <a href="#">@Bedismo</a>
                    <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                    <div class="group">
                        <div class="actions">
                            <a href="#">Reply</a>
                            <a href="#">Retweet</a>
                            <a href="#">Favorite</a>
                        </div>
                        <span class="date">5 Mar 2014</span>
                    </div>
                </div><!--Tweet Close-->
                <!--Tweet-->
                <div class="tweet">
                    <a href="#">@Bedismo</a>
                    <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                    <div class="group">
                        <div class="actions">
                            <a href="#">Reply</a>
                            <a href="#">Retweet</a>
                            <a href="#">Favorite</a>
                        </div>
                        <span class="date">5 Mar 2014</span>
                    </div>
                </div><!--Tweet Close-->
            </div>
        </div>
    </div>
</section>

<!--Gallery Widget-->
<section class="gray-bg gallery-widget">
    <div class="container">
        <h2>Product gallery</h2>
        <div class="filters">
            <a class="active" href="#" data-group="all">All</a>
            <a href="#" data-group="camera">Camera</a>
            <a href="#" data-group="flash">Flash</a>
            <a href="#" data-group="lenses">Lenses</a>
            <a href="#" data-group="video">Video</a>
        </div>
        <div class="gallery-grid">
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/1.jpg">
                <a href="{{asset('img/gallery-widget/th_1.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_1.jpg')}}" alt="1"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="img/gallery-widget/2.jpg">
                <a href="{{asset('img/gallery-widget/th_2.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_2.jpg')}}" alt="2"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["video"]' data-src="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                    <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_3.jpg')}}" alt="3"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["lenses"]' data-src="img/gallery-widget/4.jpg">
                <a href="{{asset('img/gallery-widget/th_4.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_4.jpg')}}" alt="4"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/5.jpg">
                <a href="{{asset('img/gallery-widget/th_5.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_5.jpg')}}" alt="5"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="img/gallery-widget/6.jpg">
                <a href="{{asset('img/gallery-widget/th_6.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_6.jpg')}}" alt="6"/>
                </a>
            </div>
        </div>
    </div>
</section><!--Gallery Widget Close-->



@stop