@extends('layouts.header')

@section('content')

<div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax" data-background="{{asset('assets/img/mano.png')}}" data-overlay="0.1" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;{{asset('assets/img/mano.png')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Productos</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Productos</a></li>
                                <li class="breadcrumb-item active">Todos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            <div class="overlay-background" style="opacity: 0.1;"></div><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url({{asset('assets/img/mano.png')}}&quot;); opacity: 0.2; position: fixed; top: 0px; left: 0px; width: 100%; height: 594.6px; overflow: hidden; pointer-events: none; margin-top: 1.2px; transform: translate3d(0px, -1.2px, 0px);"></div></div></section>
            <!-- Hero end-->

            <!-- Shop Grid-->
          

           <link rel="stylesheet" type="text/css" href="{{asset('css/varkala.css')}}"> 
            <!-- Shop Grid-->
    <div class="container-fluid container-fluid-px py-6">
   
     
      <!-- Hero Content-->
      
      <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <div class="product-grid-header">
            <div class="mr-3 mb-3">
               
              Showing <strong>1-12 </strong>of <strong>158 </strong>products
            </div>
            <div class="mr-3 mb-3"><span class="mr-2">Show</span><a href="#" class="product-grid-header-show active">12    </a><a href="#" class="product-grid-header-show ">24    </a><a href="#" class="product-grid-header-show ">All    </a>
            </div>
           
            <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-2">Sort by</span>
              <div class="dropdown bootstrap-select"><select name="sort" id="form_sort" data-style="btn-selectpicker border-0" title="" class="selectpicker" tabindex="-98">
                <option value="sortBy_0">Default                   </option>
                <option value="sortBy_1">Popularity                   </option>
                <option value="sortBy_2">Rating                   </option>
                <option value="sortBy_3">Newest first                   </option>
              </select><button type="button" class="btn dropdown-toggle btn-selectpicker border-0" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="form_sort" title="Default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Default</div></div> </div></button><div class="dropdown-menu" style="max-height: 2745.03px; overflow: hidden; min-height: 126px;"><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 2729.03px; overflow-y: auto; min-height: 110px;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="4" aria-posinset="1" aria-selected="true"><span class="text">Default                   </span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">Popularity                   </span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">Rating                   </span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">Newest first                   </span></a></li></ul></div></div></div>
            </div>
           
          </div>
          <div class="row">
            <!-- product-->
            @foreach($productos as $prod)
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="{{route('productos',array($prod->nombre_categoria, $prod->nombre))}}">
                    <div class="product-swap-image"><img src="{{asset('assets/img/'.$prod->img_producto)}}" alt="product" class="img-fluid product-swap-image-front"><img src="{{asset('assets/img/'.$prod->img_producto2)}}" alt="product" class="img-fluid"></div></a>
                  <div class="product-hover-overlay"><a href="#" class="text-dark text-sm">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a href="#" class="text-dark text-hover-primary mr-2">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a href="#" data-toggle="modal" data-target="#quickView" class="text-dark text-hover-primary text-decoration-none">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a href="{{route('productos',array($prod->nombre_categoria, $prod->nombre))}}" class="text-dark">{{$prod->nombre}}</a></h3><span class="text-gray-500 text-sm">${{$prod->precio}}</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- /product   -->
           

          </div>
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
          
        </div>
        <!-- Sidebar-->
        <div class="sidebar col-xl-3 col-lg-4 pr-xl-5 order-lg-1">
          <div class="sidebar-block px-3 px-lg-0">
            <div id="categoriesMenu" role="menu" class="expand-lg collapse">
              <h5 class="sidebar-heading d-none d-lg-block">Category  </h5>
              <div class="sidebar-icon-menu mt-4 mt-lg-0"> 

                <div data-toggle="collapse" data-target="#subcategories_0" aria-expanded="true" aria-controls="subcategories_0" role="menuitem" class="sidebar-icon-menu-item active"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#trousers-1"> </use>
                    </svg><a href="#" class="sidebar-icon-menu-link font-weight-bold mr-2">Trousers</a><span class="sidebar-icon-menu-count"> 120</span>
                  </div>
                  
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

            <!-- Footer end-->
        </div>
@endsection