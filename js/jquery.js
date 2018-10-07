$(document).ready(function(){
    

    /*sticky nav*/
   $('.js--section-about').waypoint(function(direction){
       if(direction == "down"){
            $('nav').addClass('sticky');
       }else{
            $('nav').removeClass('sticky');
       }
    },{
  offset: '60px'
});
    
 // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    
    
    /*MOBILE NAV*/
    
    
    $('.ja--mobile-nav').click(function(){
        var nav = $('.js--main--nav');
        nav.slideToggle(200);
    });
    
    
    
    
    
    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeInLeftBig');
    }, {offset:'20%'
       });
 
    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInRightBig');
    }, {offset:'100%'
       });
 $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated bounceInRight');
    }, {offset:'100%'
       });
    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated lightSpeedIn');
    }, {offset:'60%'
       });
    $('.js--wp-5').waypoint(function(direction){
        $('.js--wp-5').addClass('animated zoomInUp');
    }, {offset:'55%'
       });
    $('.js--wp-6').waypoint(function(direction){
        $('.js--wp-6').addClass('animated flipInX');
    }, {offset:'55%'
       });
    $('.js--wp-7').waypoint(function(direction){
        $('.js--wp-7').addClass('animated slideInUp');
    }, {offset:'35%'
       });
    $('.js--wp-8').waypoint(function(direction){
        $('.js--wp-8').addClass('animated shake');
    }, {offset:'35%'
       });

});



/*ANIMATIONS ON SCROLL*/












//var waypoints = $('#handler-first').waypoint(function(direction) {
//  notify(this.element.id + ' hit 25% from top of window') 
//}, {
//  offset: '25%'
//})