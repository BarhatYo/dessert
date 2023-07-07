$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    center: true,
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: false,
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

var phoneMask = IMask(
  document.getElementById('phone-mask'), {
    mask: '+{7}(000)000-00-00'
  });

  console.log(phoneMask);

