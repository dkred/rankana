@extends('layouts.header')

@section('content')
	 <section class="module-cover parallax text-center" data-background="{{asset('assets/img/contacto.jpg')}}" data-overlay="0.3" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(&quot;{{asset('assets/img/contacto.jpg')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Contáctenos</h2>
                            <p>Para mas información, enviarnos un mensaje aqui abajo.</p>
                        </div>
                    </div>
                </div>
            <div class="overlay-background" style="opacity: 0.3;"></div><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;{{asset('assets/img/contacto.jpg')}}&quot;); position: fixed; top: 0px; left: 0px; width: 1108px; height: 607px; overflow: hidden; pointer-events: none; margin-top: -5px; transform: translate3d(0px, 5px, 0px);"></div></div>
        </section>
        <section class="module divider-top">
                <div class="container">
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <form id="contact-form" method="post" novalidate="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" placeholder="Name" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject" placeholder="Subject" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" rows="12" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            <input class="btn btn-circle btn-brand" type="submit" value="Send Message">
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- Ajax response-->
                            <div class="ajax-response text-center" id="contact-response"></div>
                        </div>
                    </div>
                </div>
            </section>
@endsection