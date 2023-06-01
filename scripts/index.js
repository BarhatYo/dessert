$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    center: true,
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
      0:{
        items:1
      },
      769:{
        items:2
      },
      1000:{
        items:2
      },
      1200:{
        items: 2
      }
    }
  });
});

