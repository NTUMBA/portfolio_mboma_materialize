
// $(".theme").hide().show("slow");
// $(document).ready(function(){
//   $(".button-collapse").sideNav();
// });
$(document).ready(function(){
  $(".button-collapse").sideNav();
});


$(document).ready(function(){
          $('.carousel').carousel();
          // $('.carousel.carousel-slider').carousel({full_width: true});
          $('.carousel').carousel({
    // padding: 200
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}


});
