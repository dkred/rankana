@extends('layouts.header')

@section('content')
<div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" data-background="{{asset('assets/img/eventos.jpg')}}" data-overlay="0.3" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;{{asset('assets/img/eventos.jpg')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Eventos Rankana</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            <div class="overlay-background" style="opacity: 0.3;"></div><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;{{asset('assets/img/eventos.jpg')}}&quot;); position: fixed; top: 0px; left: 0px; width: 100% ; height: 607px; overflow: hidden; pointer-events: none; margin-top: -5px; transform: translate3d(0px, 5px, 0px);"></div></div></section>
            <!-- Hero end-->

            <!-- Blog-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-lg-2">

                            <!-- Post-->
                            <article class="post">
                                <div class="post-preview"><a href="#"><img src="{{asset('assets/img/sensitivo.jpg')}}" alt=""></a></div>
                                <div class="post-wrapper">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="blog-single.html">Sensitivo Selina</a></h2>
                                        <ul class="post-meta">
                                            <li>Sabado 18, 2020</li>
                                            <li><a href="#">Selina</a>, <a href="#">4 a 8 pm </a></li>
                                            <li><a href="#">Expo Arte</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>Los invitamos a la Expo Arte SENSITIVO que tendrá lugar el día de hoy sábado 18 en el Hotel Selina Calle Jerusalen 606, Arequipa. El ingreso es libre</p>
                                    </div>
                                    <div class="post-more"><a href="#">Leer Mas</a></div>
                                </div>
                            </article>
                            <!-- Post end-->

                            <!-- Post-->
                             <article class="post">
                                <div class="post-preview"><a href="#"><img src="{{asset('assets/img/sensitivo.jpg')}}" alt=""></a></div>
                                <div class="post-wrapper">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="blog-single.html">Sensitivo Selina Cirqa</a></h2>
                                        <ul class="post-meta">
                                            <li>Sabado 31, 2020</li>
                                            <li><a href="#">Cirqa</a>, <a href="#">4 a 8 pm </a></li>
                                            <li><a href="#">Expo Arte</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>Los invitamos a la Expo Arte SENSITIVO que tendrá lugar el día 31 de Enero en el hotel Cirqa Arequipa. El ingreso es libre</p>
                                    </div>
                                    <div class="post-more"><a href="#">Leer Mas</a></div>
                                </div>
                            </article>
                           
                            <!-- Post end-->

                            <!-- Page Navigation-->
                            <div class="row">
                                <div class="col-md-12">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-left"></span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><span class="fas fa-angle-right"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Page Navigation end-->
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="sidebar">

                                <!-- Search widget-->
                                <aside class="widget widget-search">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Type Search Words">
                                        <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
                                    </form>
                                </aside>

                                <!-- Categories widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Categories</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Sensitivo Celina <span class="float-right">18 Enero </span></a></li>
                                        <li><a href="#">Sensitivo Cirqa<span class="float-right">31 Enero</span></a></li>
                                    </ul>
                                </aside>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog end-->
            <!-- Footer end-->
        </div>
@endsection