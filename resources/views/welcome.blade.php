@extends('layouts.header')

@section('content')

<section class="module-cover parallax text-center fullscreen" data-background="assets/img/fondo3.jpg" data-overlay="0.6" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;assets/img/fondo3.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="m-b-20"><strong>Arte en tus manos</strong></h1>
                <p class="m-b-40">El arte como maxima expresión de sentimientos encontrados
                    <br> siente la importancia del arte en la naturaleza.</p>
                <p><a class="btn btn-lg " style="background-color: #131313; color:#afaeae;" href="{{route('productos')}}">Productos</a><a class="btn btn-lg btn-outline-new-white" href="#">Learn More</a></p>
            </div>
        </div>
    </div>
    <div class="overlay-background" style="opacity: 0.6;"></div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
        <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url('assets/img/fondo3.jpg'); position: fixed; top: 0px; left: 0px; width: 100%; height: 597px; overflow: hidden; pointer-events: none; margin-top: 0px; transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
</section>

<section class="module bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6"><img src="assets/img/logo.png" alt=""></div>
            <div class="col-lg-5 offset-lg-1">
                <h2>Flexible &amp; Lightweight.</h2>
                <p class="lead">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                <div class="space" data-my="50px" style="margin-top: 50px;"></div>
                <div class="icon-box icon-box-left">
                    <div class="icon-box-icon"><span class="ti-layout"></span></div>
                    <div class="icon-box-title">
                        <h6>Visual Composer</h6>
                    </div>
                    <div class="icon-box-content">
                        <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                    </div>
                </div>
                <div class="icon-box icon-box-left">
                    <div class="icon-box-icon"><span class="ti-cup"></span></div>
                    <div class="icon-box-title">
                        <h6>Revolution Slider</h6>
                    </div>
                    <div class="icon-box-content">
                        <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                    </div>
                </div>
                <div class="icon-box icon-box-left">
                    <div class="icon-box-icon"><span class="ti-harddrives"></span></div>
                    <div class="icon-box-title">
                        <h6>User Experience</h6>
                    </div>
                    <div class="icon-box-content">
                        <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="module parallax" data-background="assets/img/media-imagen.png" data-overlay="0.5" style="background-image: none; position: relative; z-index: 0;" data-jarallax-original-styles="background-image: url('assets/img/media-imagen.png');">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="review-slides owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                            <div class="owl-item" style="width: 100%;">
                                <div class="review">
                                    <div class="review-icons" ><img src="assets/img/flores.png" alt="" style="border-radius: 0%;">
                                    </div>
                                    <div class="review-content">
                                        <blockquote>
                                            <p>Obra de arte inspirada en las flores.</p>
                                            <footer class="blockquote-footer">Darwin Chavez</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="space m-b-50"></div>
            </div>
        </div>
    </div>

    <div class="overlay-background" style="opacity: 0.5;">

    </div>
    <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
        <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url('assets/img/media-imagen.png'); position: fixed; top: 0px; left: 0px; width: 1087px; height: 595px; overflow: hidden; pointer-events: none; margin-top: 1px; transform: translate3d(0px, 1524.2px, 0px);">

        </div>
    </div>
</section>
<section class="module bg-gray p-t-0 p-b-40" style="background-color: gray;">
    <div class="container">
        <div class="space" data-my="-60px" style="margin-top: -60px;"></div>
        <div class="row">
            <div class="col-md-2 pricing-wrapper">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-slice"></i></div>
                    <div class="pricing-title">Starter</div>
                </div>
            </div>
            <div class="col-md-2 pricing-wrapper pricing-popular">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-pin-alt"></i></div>
                    <div class="pricing-title">Standard</div>
                </div>
            </div>
            <div class="col-md-2 pricing-wrapper pricing-popular">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-marker-alt"></i></div>
                    <div class="pricing-title">Professional</div>
                </div>
            </div>
            <div class="col-md-2 pricing-wrapper">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-slice"></i></div>
                    <div class="pricing-title">Starter</div>
                </div>
            </div>
            <div class="col-md-2 pricing-wrapper pricing-popular">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-pin-alt"></i></div>
                    <div class="pricing-title">Standard</div>
                </div>
            </div>
            <div class="col-md-2 pricing-wrapper pricing-popular">
                <div class="pricing-header">
                    <div class="pricing-icon"><i class="ti-marker-alt"></i></div>
                    <div class="pricing-title">Professional</div>
                </div>
            </div>

        </div>
</section>
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h1>Ultimos eventos.</h1>
                <p class="lead">Mira nuestros ultimos eventos realizados y por realizar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="space" data-my="60px" style="margin-top: 60px;"></div>
            </div>
        </div>
        <div class="row row-post-masonry" style="position: relative; height: 452.484px;">
            <div class="col-md-4 post-item" style="position: absolute; left: 0px; top: 0px;">
                <!-- Post-->
                <article class="post">
                    <div class="post-preview">
                        <a href="#"><img src="assets/img/raices.png" alt=""></a>
                    </div>
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h2 class="post-title"><a href="blog-single.html">Raices</a></h2>
                        </div>
                        <div class="post-content">
                            <p>Enterate mas de nuestro evento realizado en el centro de las artes de la UCSP.</p>
                            <p><a href="#">Read more</a></p>
                        </div>
                    </div>
                </article>
                <!-- Post end-->
            </div>
            <div class="col-md-4 post-item" style="position: absolute; left: 319.984px; top: 0px;">
                <!-- Post-->
                <article class="post">
                    <div class="post-preview">
                        <a href="#"><img src="assets/img/raices.png" alt=""></a>
                    </div>
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h2 class="post-title"><a href="blog-single.html">Hotel Casa Andina</a></h2>
                        </div>
                        <div class="post-content">
                            <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                            <p><a href="#">Read more</a></p>
                        </div>
                    </div>
                </article>
                <!-- Post end-->
            </div>
            <div class="col-md-4 post-item" style="position: absolute; left: 639.968px; top: 0px;">
                <!-- Post-->
                <article class="post">
                    <div class="post-preview">
                        <a href="#"><img src="assets/img/raices.png" alt=""></a>
                    </div>
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h2 class="post-title"><a href="blog-single.html">Cuzco</a></h2>
                        </div>
                        <div class="post-content">
                            <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                            <p><a href="#">Read more</a></p>
                        </div>
                    </div>
                </article>
                <!-- Post end-->
            </div>
        </div>
    </div>
</section>
@endsection
