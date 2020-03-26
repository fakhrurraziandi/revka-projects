<?php 
use App\Portofolio;
use App\ValueContent;
use App\HeaderCarousel;
use App\ServiceCarousel;
use App\ClientTestimonial;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Revka</title>
        <link rel="stylesheet" href="{{asset('design/dist/app.css')}}">
    </head>
    <body>

        
        <ul class="aside-nav">
            <li class="aside-nav--item"><a class="aside-nav--link" href="#"><span>Home</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-service"><span>Service</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-about"><span>About Us</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-value"><span>Values</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-testimonial"><span>Testimonial</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-portofolio"><span>Portofolio</span></a></li>
            <li class="aside-nav--item"><a class="aside-nav--link" href="#section-contact"><span>Contact</span></a></li>
        </ul>
        
        <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
            <a class="navbar-brand" href="#">REVKA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-service">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-value">Values</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-testimonial">Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-portofolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>

                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>

        @if(HeaderCarousel::count() > 0)

            <header class="section section--header">
                <div class="owl-carousel header-carousel owl-theme">

                    @foreach(HeaderCarousel::all() as $header_carousel)
                        <div class="header-carousel__item" style="background-image: url({{$header_carousel->image_url}});">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 text-center">
                                    <h1 class="font-weight-normal">{{$header_carousel->title}}</h1>
                                        <p class="lead">{{$header_carousel->subtitle}}</p>
                                        <p class="my-5"><a href="{{$header_carousel->link_url}}" class="btn btn-danger btn-lg">{{$header_carousel->link_text}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </header>
        @endif

        @if(ServiceCarousel::count() > 0)
        
            <section class="section section--service d-flex align-items-center" id="section-service">

                

                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="text-center">
                                <h2 class="display-4">{{setting('service_section__title')}}</h2>
                                <p>{{setting('service_section__subtitle')}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="owl-carousel service-carousel owl-theme">

                                @foreach(ServiceCarousel::all() as $service_carousel)

                                    <div class="service-carousel__item">
                                        <div class="flip-card">
                                            <div class="flip-card__front">
                                                <div class="flip-card__image-holder" style="background-image: url('{{$service_carousel->image_url}}');"></div>
                                            </div>
                                            <div class="flip-card__back bg-danger">
                                                <div class="flip-card__content text-center">
                                                    <h3>{{$service_carousel->title}}</h3>
                                                    <hr class="bg-white">
                                                    <p>{{$service_carousel->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                
            </section>

        @endif

        <section class="section section--about d-flex align-items-center" id="section-about">

            <div class="section__float-left-bg-holder" style="background-image: url('{{asset('design/dist/images/photograph-of-men-having-conversation-seating-on-chair-1015568.jpg')}}');"></div>

            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-lg-6 offset-lg-6">

                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="text-center">
                                    <h2 class="display-4">{{setting('about_section__title')}}</h2>
                                    <h5 class="mb-4">{{setting('about_section__subtitle')}}</h5>
                                    <p>{{setting('about_section__detail')}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--value d-flex align-items-center" id="section-value">

            <div class="container mt-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="display-4">{{setting('value_section__title')}}</h2>
                        <h5>{{setting('value_section__subtitle')}}</h5>
                    </div>
                </div>

                @if(ValueContent::count() > 0)

                    <div class="row mb-3 justify-content-center">

                        @foreach(ValueContent::all() as $value_content)

                            <div class="col-6 col-sm-6 col-md mb-4 text-center">
                                <img src="{{$value_content->image_url}}" class="img-fluid mb-3" alt="">
                                <h4 class="mb-4 font--nunito">{{$value_content->title}}</h4>
                                <p>{{$value_content->description}}</p>
                            </div>

                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        <section class="section section--testimonial d-flex align-items-center" id="section-testimonial" style="background-image: url('{{asset('design/dist/images/adult-business-computer-contemporary-380769.jpg')}}');">
            
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        
                        <h2 class="display-4">{{setting('testimonial_section__title')}}</h2>
                        <h6>{{setting('testimonial_section__subtitle')}}</h6>
                    </div>
                </div>

                @if(ClientTestimonial::count() > 0)

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="owl-carousel testimonial-carousel owl-theme">

                                @foreach(ClientTestimonial::all() as $client_testimonial)
                                    <div class="testimonial-carousel__item">

                                        <div class="testimonial-carousel__image-holder" style="background-image: url('{{$client_testimonial->image_url}}');"></div>
                                        <div class="testimonial-carousel__text bg-danger text-center px-3">
                                            <h5 class="font--nunito my-2">{{$client_testimonial->name}}</h5>
                                            <p><small>{{$client_testimonial->testimonial}}</small></p>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <section class="section section--portofolio d-flex align-items-center" id="section-portofolio">

            <div class="container mt-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-7 text-center">
                        
                        <h2 class="display-4">{{setting('portofolio_section__title')}}</h2>
                        <p>{{setting('portofolio_section__subtitle')}}</p>
                    </div>
                </div>

                @if(Portofolio::count() > 0)
                    <div class="row mb-3 justify-content-center">
                        <div class="owl-carousel portofolio-carousel owl-theme">

                            @foreach(Portofolio::all() as $portofolio)
                                <div class="portofolio-carousel__item">
                                    
                                    <div class="portofolio-carousel__image-holder" style="background-image: url('{{$portofolio->image_url}}');"></div>
                                    <div class="portofolio-carousel__text px-5">
                                        <h5 class="font--nunito mb-0">
                                            {{$portofolio->title}}
                                        </h5>
                                    </div>
                                </div>
                            @endforeach

                            
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <section class="section section--contact d-flex align-items-center" id="section-contact">
            <div class="container-fluid h-100 mt-5">
                <div class="row h-100 align-items-center">
                    <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center py-5">

                                <div class="mb-4">
                                    <h2 class="display-4">{{setting('contact_section__title')}}</h2>
                                    <p class="lead">{{setting('contact_section__subtitle')}}</p>
                                </div>

                                <ul class="list-unstyled text-left">
                                    <li class="media align-items-center my-4">
                                        <i class="fa fa-map-marker fa-2x text-center" style="width: 100px;"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">{{setting('contact_section__address')}}</h6>
                                        </div>
                                    </li>
                                    <li class="media align-items-center my-4">
                                        <i class="fa fa-envelope fa-2x text-center" style="width: 100px;"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">{{setting('contact_section__email')}}</h6>
                                        </div>
                                    </li>
                                    <li class="media align-items-center my-4">
                                        <i class="fa fa-phone fa-2x text-center" style="width: 100px;"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">{{setting('contact_section__phone_number')}}</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>
                    <div class="col-md-6 h-100 px-0" style="height:  100vh !important;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5254036543893!2d107.65880851532476!3d-6.947178369942726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8227918c261%3A0x3936e8e0a71663e3!2sJl.%20Jupiter%20Tengah%20III%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sen!2sid!4v1584994705283!5m2!1sen!2sid" frameborder="0" style="border:0; height: 100%; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-danger py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="mb-0">© 2010-2020, Revka.id</h5>
                    </div>
                </div>
            </div>
        </footer>

       

        <script src="{{asset('design/dist/app.js')}}"></script>
    </body>
</html>