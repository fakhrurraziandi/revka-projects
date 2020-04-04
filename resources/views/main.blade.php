<?php 
use App\Portofolio;
use App\ValueContent;
use App\HeaderCarousel;
use App\ServiceCarousel;
use App\ClientTestimonial;
use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Revka</title>
        <link rel="stylesheet" href="{{asset('design/dist/app.css')}}">

        <script src="{{asset('design/dist/app.js')}}"></script>
    </head>
    <body>

        <a href="#" class="text-white back-to-top-button"><i class="fa fa-3x fa-chevron-circle-up"></i></a>

        <ul class="aside-nav aside-nav--left">
            <li class="aside-nav__item"><a class="aside-nav__link" href="{{setting('social_media__facebook_url')}}"><span><i class="fa fa-2x fa-facebook"></i></span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="{{setting('social_media__twitter_url')}}"><span><i class="fa fa-2x fa-twitter"></i></span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="{{setting('social_media__instagram_url')}}"><span><i class="fa fa-2x fa-instagram"></i></span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="{{setting('social_media__youtube_url')}}"><span><i class="fa fa-2x fa-youtube"></i></span></a></li>
        </ul>

        <ul class="aside-nav aside-nav--right">
            <li class="aside-nav__item"><a class="aside-nav__link" href="#"><span>Home</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-service"><span>Service</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-about"><span>About Us</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-value"><span>Values</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-testimonial"><span>Testimonial</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-portofolio"><span>Portofolio</span></a></li>
            <li class="aside-nav__item"><a class="aside-nav__link" href="#section-contact"><span>Contact</span></a></li>
        </ul>
        
        <nav class="navbar navbar-expand-md navbar-dark fixed-top py-3" style="background-color: rgba(0, 0, 0, 0.9);">
            <a class="navbar-brand" href="#">
                <img src="{{asset('design/dist/images/logo-revka.png')}}" alt="">
            </a>
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

                                    <div class="service-carousel__item" data-toggle="modal" data-target=".service-carousel--{{str_slug($service_carousel->title)}}">
                                        <div class="flip-card">
                                            <div class="flip-card__front">
                                                <div class="flip-card__image-holder" style="background-image: url('{{$service_carousel->image_url}}');"></div>
                                            </div>
                                            <div class="flip-card__back bg-danger">
                                                <div class="flip-card__content text-center">
                                                    <h3>{{$service_carousel->title}}</h3>
                                                    <hr class="bg-white">
                                                    <p>{{substr(strip_tags($service_carousel->description), 0, 100)}} [...]</p>
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

            @foreach(ServiceCarousel::all() as $service_carousel)

                <div class="modal fade service-carousel--{{str_slug($service_carousel->title)}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content bg-dark">
                            
                            <div class="modal-body p-5">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{$service_carousel->image_url}}" alt="" class="img-fluid mb-3">
                                    </div>
                                    <div class="col-sm-7">
                                        <h2 class="font-weight-bold">{{$service_carousel->title}}</h2>
                                        <hr class="bg-white">
                                        <p>{!!$service_carousel->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        @endif

        <section class="section section--about d-flex align-items-center" id="section-about">

            
            <div class="owl-carousel about-image-slider owl-theme">
                <div class="about-image-slider--bg-holder" style="background-image: url('{{asset('design/src/images/adult-business-computer-contemporary-380769.jpg')}}')"></div>
                <div class="about-image-slider--bg-holder" style="background-image: url('{{asset('design/src/images/books-cup-of-coffee-desk-laptop-373892.jpg')}}')"></div>
                <div class="about-image-slider--bg-holder" style="background-image: url('{{asset('design/src/images/photograph-of-men-having-conversation-seating-on-chair-1015568.jpg')}}')"></div>
            </div>
            
            

            <div class="container-fluid" style="z-index: 1;">
                <div class="row mb-3">
                    <div class="col-lg-6 offset-lg-6">

                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="text-center">
                                    <h2 class="display-4">{{setting('about_section__title')}}</h2>
                                    <h5 class="mb-4">{{setting('about_section__subtitle')}}</h5>
                                    <p>{{substr(strip_tags(setting('about_section__detail')), 0, 100)}} [..]</p>
                                    
                                    <p class="my-4"><a href="#" data-toggle="modal" data-target=".modal-about-us" class="btn btn-danger">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade modal-about-us" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content bg-dark">
                    
                    <div class="modal-body p-5">
                        <div class="row">
                            
                            <div class="col-sm-12 text-center">
                                <h2 class="display-4">{{setting('about_section__title')}}</h2>
                                <h5 class="mb-4">{{setting('about_section__subtitle')}}</h5>
                                <p>{!!setting('about_section__detail')!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center">
                            <div class="owl-carousel testimonial-carousel owl-theme">

                                @foreach(ClientTestimonial::all() as $client_testimonial)
                                    <div class="testimonial-carousel__item"  data-toggle="modal" data-target=".client-testimonial--{{str_slug($client_testimonial->name)}}">

                                        <div class="testimonial-carousel__image-holder" style="background-image: url('{{$client_testimonial->image_url}}');"></div>
                                        <div class="testimonial-carousel__text bg-danger text-center px-3">
                                            <h5 class="font--nunito my-2">{{$client_testimonial->name}}</h5>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        @foreach(ClientTestimonial::all() as $client_testimonial)

            <div class="modal fade client-testimonial--{{str_slug($client_testimonial->name)}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content bg-dark">
                        
                        <div class="modal-body p-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{$client_testimonial->image_url}}" alt="" class="img-fluid mb-3 w-100">
                                </div>
                                <div class="col-sm-9">
                                    <h2 class="font-weight-bold">{{$client_testimonial->name}}</h2>
                                    <hr class="bg-white">
                                    <p>{!!$client_testimonial->testimonial!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

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
                                <div class="portofolio-carousel__item"  data-toggle="modal" data-target=".portofolio--{{str_slug($portofolio->title)}}">
                                    
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

        @foreach(Portofolio::all() as $portofolio)

            <div class="modal fade portofolio--{{str_slug($portofolio->title)}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content bg-dark">
                        
                        <div class="modal-body p-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{$portofolio->image_url}}" alt="" class="img-fluid mb-3 w-100">
                                </div>
                                <div class="col-sm-7">
                                    <h2 class="font-weight-bold">{{$portofolio->title}}</h2>
                                    <hr class="bg-white">
                                    <p>{!!$portofolio->description!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

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

                                <form class="text-left border-bottom border-white pb-5" method="POST" action="{{route('submit-contact-message')}}">

                                    @if(Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Submitted!</strong> We have received your contact message, we will contact you shortly
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @csrf

                                    

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label text-md-right">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email Address">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label text-md-right">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="message" class="col-sm-2 col-form-label text-md-right">Message</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Your Message" rows="6"></textarea>
                                            @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane-o"></i> Submit</button>
                                        </div>
                                    </div>
                                </form>

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
                        {!!setting('contact_section__google_map_embedded_script')!!}
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-danger py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0">© 2010-2020, Revka.id</p>

                        <ul class="m-0 p-0 py-3 d-sm-block d-md-none d-lg-none">
                            <li class="d-inline-block"><a class="text-white px-3 py-2" href="{{setting('social_media__facebook_url')}}"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li class="d-inline-block"><a class="text-white px-3 py-2" href="{{setting('social_media__twitter_url')}}"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li class="d-inline-block"><a class="text-white px-3 py-2" href="{{setting('social_media__instagram_url')}}"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li class="d-inline-block"><a class="text-white px-3 py-2" href="{{setting('social_media__youtube_url')}}"><span><i class="fa fa-youtube"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

       

        
    </body>
</html>