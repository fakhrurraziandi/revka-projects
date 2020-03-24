
// CSS/SCSS FIles
import './style.scss';

// JS Files
// import $ from 'jquery';
// window.jQuery = $;
// window.$ = $;

import 'popper.js';
import 'bootstrap';
import 'owl.carousel';



// import 'owl.carousel/dist/assets/owl.carousel.css';


$('.header-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    items: 1,
    animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});


$('.service-carousel').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    items: 3,
    // animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    
    responsive:{
        0:{
            items:1,
            nav:true,
            stagePadding: 75,
        },
        576:{
            items:2,
            nav:true,
            stagePadding: 75,
        },
        768:{
            items:3,
            nav:true,
        },
        992:{
            items:3,
            nav:true,
        }
    }
});


$('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:75,
    nav:true,
    items: 3,
    center: true,
    animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        576:{
            items:1,
            nav:true,
        },
        768:{
            items:3,
            nav:true,
        },
        992:{
            items:3,
            nav:true,
        }
    }
});


$('.portofolio-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items: 3,
    center: true,
    animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true,
        },
        576:{
            items:3,
            nav:true,
        },
        768:{
            items:5,
            nav:true,
        },
        992:{
            items:6,
            nav:true,
        }
    }
});


$(function(){

    // $('.aside-nav--link').on('click', function(){
    //     $('.aside-nav--link').each(function(){
    //         console.log($(this).attr('href'), window.location.hash);
    //         if ($(this).attr('href')  ===  window.location.hash) {
    //             $(this).addClass('active');
    //         }else{
    //             $(this).removeClass('active');
    //         }
    //     });
    // });

    // $('.aside-nav--link').each(function(){
    //     console.log($(this).attr('href'), window.location.hash);
    //     if ($(this).attr('href')  ===  window.location.hash) {
    //         $(this).addClass('active');
    //     }else{
    //         $(this).removeClass('active');
    //     }
    // });
    
});