$(document).ready(function() {
   
   $("#owl-example").owlCarousel({
   
    loop: true,
    dots: false,
    autoplay: true,
    autoplayTimeout:4000,
    margin: 10,
    responsive:{
        0:{
           items:1
        },
        600:{
            items:3
        },
        1000:{
         items:4
        }
   }
   });
  
 });