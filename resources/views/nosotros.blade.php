@extends('layouts.header')

@section('content')
<div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" data-background="{{asset('assets/img/bg_top.png')}}" data-jarallax-video="https://www.youtube.com/watch?v=WiDboekzx88" data-overlay="0.85" data-gradient="1" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;{{asset('assets/img/bg_top.png')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>RANKANA  </h1>
                            <p>Somos parte de una sola familia</p>
                        </div>
                    </div>
                </div>
            <div class="overlay-background overlay-gradient" style="opacity: 0.85;"></div><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;{{asset('assets/img/bg_top.png')}}&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 640px; overflow: hidden; pointer-events: none; margin-top: -21.5px; transform: translate3d(0px, 21.5px, 0px); display: none;"></div><iframe id="VideoWorker-0" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="640" height="360" src="https://www.youtube.com/watch?v=WiDboekzx88" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 1040px; max-width: none; max-height: none; margin: -221.5px 0px 0px -14.8889px; z-index: -1; transform: translate3d(0px, 21.5px, 0px);"></iframe></div></section>
            <!-- Hero end-->

            <!-- About-->
            <section class="module bg-gray p-t-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="space" data-my="-60px" style="margin-top: -60px;"></div>
                            <div class="modal-video-container"><img src="{{asset('assets/img/bg_top.png')}}" alt=""><a class="play-button" href="https://www.youtube.com/watch?v=WiDboekzx88"></a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-my="60px" style="margin-top: 60px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-layout"></span></div>
                                <div class="icon-box-title">
                                    <h6>Misión</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>Revalorar el arte peruano a través del trabajo de un equipo multidisciplinario en diversas áreas tecnológicas, logísticas y de marketing, los cuales están encargados de encontrar mercados donde el valor del arte y la artesanía sea alto, trayendo valor económico al artista. Siendo nuestra prioridad principal que el protagonista de las operaciones sea el artista y el artesano, su obra y su mística detrás de sus trabajos.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-cup"></span></div>
                                <div class="icon-box-title">
                                    <h6>Visión</h6>
                                </div>
                                <div class="icon-box-content">
                                    <p>Ser el servicio tecnológico líder en la revaloración y venta de arte y artesanía peruana, así como ser el nexo principal en la integración tecnológica de potencial artístico peruano.</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
            <!-- About end-->
            <!-- Team-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 m-auto text-center">
                            <h1>Personas creativas.</h1>
                            <p class="lead">Nos esforzamos dia a dia para que el arte sea valorado a nivel mundial.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-my="60px" style="margin-top: 60px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/digo2.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Diego Franco</h6>
                                            <div class="team-role">Fundador</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/monica.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Monica </h6>
                                            <div class="team-role">Coordinadora General</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/mara.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Mara Catacora</h6>
                                            <div class="team-role">Coordinadora de Artistas</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/nicolay.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Charles Nicolay</h6>
                                            <div class="team-role">Desarrollador</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/lama.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Jorge Lama</h6>
                                            <div class="team-role">Administrador</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/johnny.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Johnny Portilla</h6>
                                            <div class="team-role">Diseñador</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-image"><img src="{{asset('assets/img/equipo/renzo-menchola.png')}}" alt="">
                                    <div class="team-wrap">
                                        <div class="team-content">
                                            <h6 class="team-name">Renzo Menchola</h6>
                                            <div class="team-role">Asesor</div>
                                        </div>
                                        <div class="team-content-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-my="30px" style="margin-top: 30px;"></div>
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- Team end-->


            <!-- Footer end-->
        </div>
@endsection