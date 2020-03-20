@extends('layouts.header')

@section('content')

<div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax" data-background="{{asset('assets/img/media-imagen2.png')}}" data-overlay="0.1" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;{{asset('assets/img/media-imagen2.png')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Artistas</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                                <li class="breadcrumb-item active">Todos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            <div class="overlay-background" style="opacity: 0.1;"></div><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url({{asset('assets/img/media-imagen2.png')}}&quot;); opacity: 0.2; position: fixed; top: 0px; left: 0px; width: 100%; height: 594.6px; overflow: hidden; pointer-events: none; margin-top: 1.2px; transform: translate3d(0px, -1.2px, 0px);"></div></div></section>
            <!-- Hero end-->

            <!-- Shop Grid-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        @foreach(Session::get('artistas') as $art) 
                        <div class="col-md-3">
                            <div class="shop-grid-item">
                                <div class="shop-item-thumb"><a href="#"><img src="{{asset('assets/img/artista.png')}}" alt=""></a>
                                    <div class="shop-item-hidden"><a class="btn btn-new-white" href="{{route('artistas',$art->nombre_artista)}}">{{$art->nombre_artista}}</a></div>
                                </div>
                               
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-my="40px" style="margin-top: 40px;"></div>
                        </div>
                    </div>

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
            </section>
            <!-- Shop Grid-->


            <!-- Footer end-->
        </div>
@endsection