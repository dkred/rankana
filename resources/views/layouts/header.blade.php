<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RANKANA</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Plugins-->
        <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
   </head>
    <body>

        <!-- Preloader-->
        <div class="page-loader" style="display: none;">
            <div class="page-loader-inner">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Preloader end-->

        <!-- Header-->
        <header id ="header-1" class="header header-transparent" style="padding-top: 60px;">
            <div class="container-fluid">
                <!-- Brand-->
                <div id="login-i" class="inner-header" style="margin-top: -60px"><a class="inner-brand" href="index.html">Contacto | </a><a class="inner-brand ml-1" href="index.html"> ES</a></div>
                
                <!-- Navigation-->
                <div  id="logo" class="inner-navigation"  style="margin-top: -30px;"><a class="inner-brand" href="{{route('welcome')}}"><img src="{{asset('assets/img/rankana_logo_text.png')}}" width="200"></a></div>
                <div class="inner-navigation collapse" >
                    <div class="inner-nav">
                        <ul>
                            <li class="menu-item-has-children menu-item-has-mega-menu"><a href="{{route('productos')}}"><span class="menu-item-span">Productos</span></a>
                                <div class="mega-menu">
                                    <ul class="sub-menu mega-menu-row" data-background="{{ asset('assets/img/logo.png')}}" style="background-image: url('{{ asset('assets/img/logo.png')}}');">
                                        <!-- Column 1-->
                                        
                                        <li class="menu-item-has-children mega-menu-col"><a href="{{route('productos')}}">Todos</a>
                                        </li>
                                        @foreach(Session::get('categorias') as $cat)
                                        <li class="menu-item-has-children mega-menu-col"><a href="{{route('productos', $cat->nombre_categoria)}}">{{$cat->nombre_categoria}}</a>
                                        </li>
                                        @endforeach  
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children menu-item-has-mega-menu"><a href="{{route('artistas')}}"><span class="menu-item-span">Artistas</span></a>
                                <div class="mega-menu">
                                    <ul class="sub-menu mega-menu-row" data-background="assets/img/logo.png" style="background-image: url(&quot;assets/img/logo.png&quot;);">
                                        <!-- Column 1-->
                                         <li class="menu-item-has-children mega-menu-col"><a href="#">Pinturas</a>
                                            <ul class="sub-menu">

                                                @foreach(\Session::get('artistas') as $art) 
                                                    @if($art->id_categoria == 1)
                                                    <li><a href="{{route('artistas',$art->nombre_artista)}}">{{$art->nombre_artista}}</a></li>
                                                    @endif
                                                @endforeach
                                                {{\Session::get('artistas')->links()}}
                                            </ul>
                                        </li>
                                         <li class="menu-item-has-children mega-menu-col"><a href="#">Artesanias</a>
                                            <ul class="sub-menu">
                                                 @foreach(\Session::get('artistas') as $art) 
                                                    @if($art->id_categoria == 2)
                                                    <li><a href="{{route('artistas',$art->nombre_artista)}}">{{$art->nombre_artista}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children"><a href="{{route('nosotros')}}"><span class="menu-item-span">Nosotros</span></a>
                               
                            </li>
                            <li class="menu-item-has-children"><a href="{{route('eventos')}}"><span class="menu-item-span">Eventos</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Classic</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-1.html">Right Sidebar</a></li>
                                            <li><a href="blog-2.html">Left Sidebar</a></li>
                                            <li><a href="blog-3.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Masonry</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-4.html">Right Sidebar</a></li>
                                            <li><a href="blog-5.html">Left Sidebar</a></li>
                                            <li><a href="blog-6.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Side Image</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-7.html">Right Sidebar</a></li>
                                            <li><a href="blog-8.html">Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Single Post</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single-1.html">Right Sidebar</a></li>
                                            <li><a href="blog-single-2.html">Left Sidebar</a></li>
                                            <li><a href="blog-single-3.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{route('contacto')}}"><span class="menu-item-span">Contáctenos</span></a>
                                
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
                <div id="login-d" class="extra-nav" style="margin-top: -60px">
                    <ul>
                        <li><a class="top-bar-cart" href="shop-cart-1.html"><span class="menu-item-span"><i class="ti-shopping-cart"></i><span>3</span></span></a></li>
                        <li><a class="off-canvas-open" href="#"><span class="menu-item-span"><i class="ti-search"></i></span></a></li>
                        <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="menu-item-span"><i class="ti-search"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </header>
                <section class="content">
                    @yield('content')
                </section>



            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Text widget-->
                                <aside class="widget widget-recent-entries">
                                    <div class="widget-title">
                                        <h6>Productos</h6>
                                    </div>
                                    <ul>

                                        @foreach(Session::get('categorias') as $cat)
                                        <li><a href="{{route('productos', $cat->nombre_categoria)}}">{{$cat->nombre_categoria}}.</a><span class="post-date">{{$cat->nombre_categoria}}</span></li>

                                      
                                        @endforeach  
                                        
                                        <li>
                                            <div class="textwidget">
                                                <ul class="social-icons">
                                                    <li><a href="https://twitter.com/Rankana_art"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.instagram.com/rankana.art/?hl=es-la"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="https://www.facebook.com/rankana.art/"><i class="fab fa-facebook-f"></i></a></li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </aside>
                                
                            </div>
                            <div class="col-md-3">
                                <!-- Recent entries widget-->
                                <aside class="widget widget-recent-entries">
                                    <div class="widget-title">
                                        <h6>Exposiciones</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">SENSITIVO Expo Arte. Selina</a><span class="post-date">18 Enero, 2020</span></li>
                                        <li><a href="#">SENSITIVO Expo Arte. Cirqa.</a><span class="post-date">31 Enero, 2020</span></li>
                                        
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Twitter widget-->
                                <aside class="widget widget-recent-entries">
                                    <div class="widget-title">
                                        <h6>Nosotros</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Nuestro equipo</a><span class="post-date">Misión y Visión</span></li>
                                        <li><a href="{{route('contacto')}}">Contáctenos.</a></li>
                                        <li><a href="tel:+51 965006666">Llamanos.</a><span class="post-date">+51 965 006 666</span></li>
                                        <li><a href="tel:+51 965006666">Envianos un Mail.</a><span class="post-date">diego.franco@rankanastore.com</span></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Recent works-->
                                <aside class="widget widget-recent-works">
                                    <div class="widget-title">
                                        <h6>Auspiciadores</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#"><img src="{{asset('assets/img/cajaarequipa.png')}}" alt=""></a></li>
                                        
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p><a href="#">Derechos reservados bajos Rankana, editado por CH@RLSBUILD</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end-->
        </div>
        <!-- Wrapper end-->
        <!-- Off canvas-->
        <div class="off-canvas-sidebar">
            <div class="off-canvas-sidebar-wrapper" style="margin-right: -17px;">
                <div class="off-canvas-header"><a class="off-canvas-close" href="#"><span class="ti-close"></span></a></div>
                <div class="off-canvas-content">
                    <!-- Text widget-->
                    <aside class="widget widget-text">
                        <div class="textwidget">
                            <p class="text-center"><img src="assets/img/rankana_logo_text.png" alt="" width="80px"></p>
                            <p class="text-center">
                               <form>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Iniciar Busqueda</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribir Busqueda">
                                    <small id="emailHelp" class="form-text text-muted">Busqueda en productos.</small>
                                  </div>
                                  <button type="submit" class="btn btn-lg btn-outline-new-white">Buscar</button>
                                </form>
                                
                            </p>

                        </div>
                    </aside>
                    <!-- Recent portfolio widget-->
                    <aside class="widget widget-recent-works">
                        <ul>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/flores.png" alt=""></a></li>
                        </ul>
                    </aside>
                    <!-- Social Icons-->
                    <ul class="social-icons text-center">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Off canvas end-->

        <!-- To top button--><a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>

        <!-- Scripts-->
        <script src="{{ asset('assets/js/custom/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom.min.js') }}"></script>
        <script type="text/javascript">
            $(function () {
                  var $win = $(window);
                  var $pos = 5;
                  $win.scroll(function () {
                     if ($win.scrollTop() <= $pos){
                        $('#header-1').css("padding-top","60px");
                        $('#login-i').css("margin-top","-60px");
                        $('#login-d').css("margin-top","-60px");
                        $('#logo').show();
                     }
                     else {
                        
                        $('#header-1').css("padding-top","0px");
                        $('#login-i').css("margin-top","0px");
                        $('#login-d').css("margin-top","0px");
                        $('#logo').hide();
                     }
                   });
            });

        
        </script>
</body></html>