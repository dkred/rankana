@extends('layouts.header')

@section('content')


<div class="wrapper">
            <!-- Page Header-->
            <section class="module-page-title bg-black">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title-desc">
                                <h1 class="page-title-heading" style="color: white;">{{$producto->nombre}}</h1>
                                <!--p This theme will shake your world.-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">{{$producto->nombre_categoria}}</a></li>
                                <li class="breadcrumb-item active">{{$producto->nombre}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header end-->

            <!-- Product-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="shop-single-item-photos"><a class="shop-single-item-popup" href="{{asset('assets/img/'.$producto->img_producto)}}"><img src="{{asset('assets/img/'.$producto->img_producto)}}" alt=""></a>
                                <ul class="shop-single-item-gallery">
                                    <li><a class="shop-single-item-popup" href="{{asset('assets/img/'.$producto->img_producto)}}"><img src="{{asset('assets/img/'.$producto->img_producto)}}" alt=""></a></li>
                                    <li><a class="shop-single-item-popup" href="{{asset('assets/img/'.$producto->img_producto2)}}"><img src="{{asset('assets/img/'.$producto->img_producto2)}}" alt=""></a></li>
                                    <li><a class="shop-single-item-popup" href="{{asset('assets/img/'.$producto->img_producto3)}}"><img src="{{asset('assets/img/'.$producto->img_producto3)}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="shop-single-item">
                                <h2 class="shop-single-item-title">{{$producto->nombre}}</h2>
                                <div class="shop-single-item-rating"><span class="star-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span><a href="#">(2 customer reviews)</a></div>
                                <h2 class="shop-single-item-price">${{$producto->precio}}</h2>
                                <div class="shop-single-item-description">
                                    <p>{{$producto->descripcion}}</p>
                                </div>
                                <div class="form-row">
                                    
                                    
                                </div>
                               
                                <hr class="m-t-10 m-b-20">
                                <div class="info-list">
                                    <li><span class="info-list-title">Peso:</span><span>{{$producto->peso}} Kg</span></li>
                                    <li><span class="info-list-title">Dimensión: </span><span><a href="#">{{$producto->dimension}}</a></span></li>
                                    <li><span class="info-list-title">Materiales: </span><span><a href="#">{{$producto->materiales}}</a></span></li>
                                    <li><span class="info-list-title">Origen: </span><span><a href="#">{{$producto->origen}}</a></span></li>
                                    <li><span class="info-list-title">Stock: </span><span><a href="#">{{$producto->stock}}</a></span></li>
                                </div>
                                <hr class="m-t-20 m-b-20">
                                 <div class="form-row">
                                    <div class="form-group col-md-6"><a class="btn btn-block btn-dark" href="#">Add to cart</a></div>
                                </div>
                                <hr class="m-t-20 m-b-20">
                                <div class="info-list">
                                    <li><span class="info-list-title">Share:</span><span>
                                            <ul class="social-icons">
                                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            </ul></span></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product end-->

            <!-- Tabs-->
            <section class="module no-gutter p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#shop-description">
                                        <h6>Description</h6></a></li>
                                <li class="nav-item"><a class="nav-link show" data-toggle="tab" href="#shop-info">
                                        <h6>Additional information</h6></a></li>
                                <li class="nav-item"><a class="nav-link show" data-toggle="tab" href="#shop-comment">
                                        <h6>Reviews (2)</h6></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-tab-content tab-content">
                                <div class="tab-pane fade active show" id="shop-description">
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.</p>
                                </div>
                                <div class="tab-pane fade" id="shop-info">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <th>Info</th>
                                            </tr>
                                            <tr>
                                                <td>Compositions</td>
                                                <td>Jeans</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>44, 46, 48</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Black</td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Somebrand</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="shop-comment">
                                    <!-- Comments area-->
                                    <div class="comments-area-shop">
                                        <div class="comment-list-shop">
                                            <!-- Comment-->
                                            <div class="comment-shop">
                                                <div class="comment-author-shop"><img class="avatar" src="assets/images/avatar/1.jpg" alt=""></div>
                                                <div class="comment-body-shop">
                                                    <div class="comment-meta-shop">
                                                        <div class="comment-meta-author-shop"><a href="#">Jason Ford</a></div>
                                                        <div class="comment-meta-date-shop"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                    </div>
                                                    <div class="comment-content-shop">
                                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>
                                                        <p><span class="star-rating star-rating-4"></span></p>
                                                    </div>
                                                    <div class="comment-reply-shop"><a href="#">Reply</a></div>
                                                </div>
                                                <!-- Subcomment-->
                                                <div class="children">
                                                    <div class="comment-shop">
                                                        <div class="comment-author-shop"><img class="avatar" src="assets/images/avatar/2.jpg" alt=""></div>
                                                        <div class="comment-body-shop">
                                                            <div class="comment-meta-shop">
                                                                <div class="comment-meta-author-shop"><a href="#">Manager</a></div>
                                                                <div class="comment-meta-date-shop"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                            </div>
                                                            <div class="comment-content-shop">
                                                                <p>Sound Good!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Subcomment-->
                                                <div class="children">
                                                    <div class="comment-shop">
                                                        <div class="comment-author-shop"><img class="avatar" src="assets/images/avatar/4.jpg" alt=""></div>
                                                        <div class="comment-body-shop">
                                                            <div class="comment-meta-shop">
                                                                <div class="comment-meta-author-shop"><a href="#">Manager</a></div>
                                                                <div class="comment-meta-date-shop"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                            </div>
                                                            <div class="comment-content-shop">
                                                                <p>Thank you!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Comment-->
                                            <div class="comment-shop">
                                                <div class="comment-author-shop"><img class="avatar" src="assets/images/avatar/3.jpg" alt=""></div>
                                                <div class="comment-body-shop">
                                                    <div class="comment-meta-shop">
                                                        <div class="comment-meta-author-shop"><a href="#">Henry Cain</a></div>
                                                        <div class="comment-meta-date-shop"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                    </div>
                                                    <div class="comment-content-shop">
                                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>
                                                        <p><span class="star-rating star-rating-4"></span></p>
                                                    </div>
                                                    <div class="comment-reply-shop"><a href="#">Reply</a></div>
                                                </div>
                                                <!-- Subcomment-->
                                                <div class="children">
                                                    <div class="comment-shop">
                                                        <div class="comment-author-shop"><img class="avatar" src="assets/images/avatar/2.jpg" alt=""></div>
                                                        <div class="comment-body-shop">
                                                            <div class="comment-meta-shop">
                                                                <div class="comment-meta-author-shop"><a href="#">Manager</a></div>
                                                                <div class="comment-meta-date-shop"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                                            </div>
                                                            <div class="comment-content-shop">
                                                                <p>Thank you!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-respond">
                                            <h5 class="comment-reply-title">Add Review</h5>
                                            <p class="comment-notes">Your email address will not be published. Required fields are marked</p>
                                            <form class="comment-form row">
                                                <div class="form-group col-md-4">
                                                    <input class="form-control" type="text" placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input class="form-control" type="text" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select class="form-control">
                                                        <option selected="selected">Your Rating</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <textarea class="form-control" rows="8" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-submit col-md-12">
                                                    <button class="btn btn-dark" type="submit">Post Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Comments area end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tabs end-->

            <!-- Related Products-->
            <section class="module divider-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-9 m-auto text-center">
                            <h5>You may also like:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-my="40px" style="margin-top: 40px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel shop-carousel owl-loaded owl-drag">
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1920px, 0px, 0px); transition: all 0.25s ease 0s; width: 4560px;"><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/5.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Solo Headphones</h6><span class="shop-item-price">$100.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/6.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Ceramic Watch</h6><span class="shop-item-price">$20.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/7.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Wooden Bathroom Set</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/8.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Plain Glass Bottle</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/9.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Plain Glass Bottle</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/1.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Classic Chair</h6><span class="shop-item-price">$20.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/2.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Thermo Flask</h6><span class="shop-item-price">$30.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/3.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Folder Calendar</h6><span class="shop-item-price">$50.00</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/4.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Amber Body Lotion</h6><span class="shop-item-price">$80.00</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/5.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Solo Headphones</h6><span class="shop-item-price">$100.00</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/6.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Ceramic Watch</h6><span class="shop-item-price">$20.00</span>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/7.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Wooden Bathroom Set</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/8.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Plain Glass Bottle</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/9.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Plain Glass Bottle</h6><span class="shop-item-price">$40.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/1.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Classic Chair</h6><span class="shop-item-price">$20.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/2.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Thermo Flask</h6><span class="shop-item-price">$30.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/3.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Folder Calendar</h6><span class="shop-item-price">$50.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/4.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Amber Body Lotion</h6><span class="shop-item-price">$80.00</span>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 210px; margin-right: 30px;"><div class="shop-grid-item">
                                    <div class="shop-item-thumb"><a href="#"><img src="assets/images/shop/5.jpg" alt=""></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="#">Add to cart</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title">Solo Headphones</h6><span class="shop-item-price">$100.00</span>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><span class="ti-angle-left"></span></div><div class="owl-next"><span class="ti-angle-right"></span></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related Products end-->

        </div>

@endsection