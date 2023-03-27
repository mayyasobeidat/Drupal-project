(function ($) {

Drupal.behaviors.exampleModule = {
  attach: function (context, settings) {

 'use strict';
 
jQuery(window).scroll(function(){
var scroll = $(window).scrollTop();
if (scroll >= 100) {
    $("#header").addClass("sticky");
} else {
    $("#header").removeClass("sticky");
}

});

 // $( document ).ready(function() {
       
 //    });

jQuery(document).ready(function( $ ) { 


  function createSlick(){  

  $(".slidex1, .slidex2, .slidex3, .slidex4").not('.slick-initialized').slick({
    slidesToShow: 4,
  infinite: true,
  mobileFirst:true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1240,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 968,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
}); 


}

createSlick();

//Now it will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );

  
 $('.navbar-nav  li :nth-child(6)').addClass("btn btn-info");

// $(".navbar-nav .nav-item>a:last-child").addClass("btn btn-info");


  new WOW().init(); 
  
  $('.news').owlCarousel({
    loop: true,
    margin: 10,
    dots:false,
    nav: true,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }    
    }
  });

  $('.latest-news-events').owlCarousel({
    loop: true,
    margin: 0,
    dots:true,
    nav: false,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }    
    }
  });
  $('.blog').owlCarousel({
    loop: true,
    margin: 10,
    dots:true,
    nav: false,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }    
    }
  });
  $('.courses').owlCarousel({
    loop: true,
    margin: 10,
    dots:true,
    nav: false,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }    
    }
  });

  $('.testimonials').owlCarousel({
    loop: true,
    margin: 10,
    dots:true,
    nav: false,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }    
    }
  });

    $('.features').owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    nav: false,
    responsive: {
      0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }    
    }
  });

 // Initiate superfish on nav menu
  $('.navbar-nav').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });
  


  $('.portfolio-popup').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: false,
      duration: 300,
      easing: 'ease-in-out',
      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
});

  $('.popup-youtube').magnificPopup({
         disableOn: 700,
         type: 'iframe',
         mainClass: 'mfp-fade',
         removalDelay: 160,
         preloader: false,
         fixedContentPos: false
       });

  });

  $(document).ready(function() {
    

    $('.form_datetime1').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    }); 
    $('.form_datetime2').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
                });
   }); 

  $(document).ready(function(){
 var item_num = $('nav.cat li').length + 1;
 var btn_state = true;
 
 $('nav.cat li').hover(function(){
   $(this).addClass('hover');
 },function(){
   $(this).removeClass('hover');
 });
   
    $('nav.cat li:first-child').addClass('currentPage');
    
 $('nav.cat li').on('click',function(){
   if(btn_state){
     btn_state = !btn_state;
     $('nav.cat li').removeClass('currentPage');
     $(this).addClass('currentPage');

     var i = $('nav.cat li').index(this);
     $('article.rel').removeClass('show');
     $('article.rel').addClass('hide');
     $('article.rel').eq(i).addClass('show');
     
     setTimeout(function(){
       btn_state = !btn_state;
     },500);
   }
 });
  
 
});
}}})(jQuery, Drupal);







