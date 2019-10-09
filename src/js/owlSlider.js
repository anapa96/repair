$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin:30,
    nav:true,
    navText: ["<img src='img/portfolio/left-arrow.png'>", "<img src='img/portfolio/right-arrow.png'>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 30
        },
        1200:{
            items:3,
            margin: 30
        }
    }
  });
});