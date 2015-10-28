@extends('master')

@section('conteudo')

<section class="hero-slider">
    <div class="master-slider" id="hero-slider">

        <!--Slide 1-->
        <div class="ms-slide" data-delay="7">
            <div class="overlay"></div>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_1.jpg')}}" alt="Nikon D4S"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Taylor ce 610</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Incrivel linha da taylor com novo expression system 2.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>R$ 4000</span>Adquira já</a></div>
        </div>

        <!--Slide 2-->
        <div class="ms-slide" data-delay="7">
            <span class="overlay"></span>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_2.jpg')}}" alt="Nest"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Martin OM-28</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad"> Classico da linha Martin OM feito Rosewood brasileiro.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="rotatebottom(30|90,long,br,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1640$</span>Adquira já</a></div>
        </div>

        <!--Slide 3-->
        <div class="ms-slide" data-delay="7">
            <div class="overlay"></div>
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/hero/slideshow/slide_3.jpg')}}" alt="3D Printer"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Fender Telcaster 90s</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad"></p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="left(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>R$ 2500</span>Adquira já</a></div>
        </div>

    </div>
</section><!--Hero Slider Close-->



<!--Catalog Grid-->
@include('catalogo')<!--Catalog Grid Close-->

@include('tab-precos')

<!--Posts/Twitter Widget-->


<!--Gallery Widget-->
<section class="gray-bg gallery-widget">
    <div class="container">
        <h2>Galeria</h2>
        <div class="filters">
            <a class="active" href="#" data-group="all">Todos</a>
            <a href="#" data-group="camera">Violão</a>
            <a href="#" data-group="flash">Guitarra</a>
            <a href="#" data-group="lenses">Baixo</a>
            <a href="#" data-group="video">Amplificador</a>
        </div>
        <div class="gallery-grid">
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="{{asset('img/gallery-widget/th_1.jpg')}}">
                <a href="{{asset('img/gallery-widget/th_1.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_1.jpg')}}" alt="1"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="{{asset('img/gallery-widget/th_2.jpg')}}">
                <a href="{{asset('img/gallery-widget/th_2.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_2.jpg')}}" alt="2"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["video"]' data-src="https://www.youtube.com/watch?v=-b8H93bNe48">
                <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                    <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_3.jpg')}}" alt="3"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["lenses"]' data-src="{{asset('img/gallery-widget/th_4.jpg')}}">
                <a href="{{asset('img/gallery-widget/th_4.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_4.jpg')}}" alt="4"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="{{asset('img/gallery-widget/th_5.jpg')}}">
                <a href="{{asset('img/gallery-widget/th_5.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_5.jpg')}}" alt="5"/>
                </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="{{asset('img/gallery-widget/th_6.jpg')}}">
                <a href="{{asset('img/gallery-widget/th_6.jpg')}}">
                    <div class="overlay"><span><i class="icon-expand"></i></span></div>
                    <img src="{{asset('img/gallery-widget/th_6.jpg')}}" alt="6"/>
                </a>
            </div>
        </div>
    </div>
</section><!--Gallery Widget Close-->



@stop