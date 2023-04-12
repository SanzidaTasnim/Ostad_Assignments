$(function(){



  var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '.navbar',
    offset: 20,
  })
//animation scroll js
 var html_body = $('html, body');
 $('nav a').on('click', function () {
     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
         if (target.length) {
             html_body.animate({
                 scrollTop: target.offset().top - 50
             }, 1500);
             return false;
         }
     }
 });
 //smoothscroll js
 $(window).scroll(function(){
   var scrolling = $(this).scrollTop();

   if (scrolling > 250) {
     $('.navbar').addClass('bg');
   }
   else {
    $('.navbar').removeClass('bg');
   }
 })

// Counter Up PlugIn

$('.counter').counterUp({
    delay: 10,
    time: 2000
}); 
// Feedback slider

$('.feedback-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '.left',
    nextArrow: '.right'
  });

// team slider

$('.team-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      }
    }
  ]
});

})