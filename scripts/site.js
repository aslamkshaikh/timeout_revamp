(function($) {
 
    ///*** sticky header ***///  
    $(window).scroll(function() {
        var sticky = $('.menu-wrapper'),
        scroll = $(window).scrollTop();

        if (scroll >= 150) { 
        sticky.addClass('fixed'); }
        else { 
        sticky.removeClass('fixed');
        }
    });
    jQuery('.navbar-toggler').click(function(){
	  	jQuery('body').toggleClass('overflow-hidden');
		jQuery(this).toggleClass('overflow-hidden');
    });
    jQuery('.col-md-3').click(function(){
        jQuery(this).find('ul').toggleClass('open');
        jQuery(this).find('h4').toggleClass('minus');
    });
    jQuery(".mail").click(function(){
        $(".subscribe").animate({ height: 'toggle' });
    });
    jQuery(".mail").click(function(){
        jQuery('.mail-subs').toggleClass('open');
    });

    // jQuery(".login").click(function(){
    //     jQuery('body').addClass('overflow-hidden1');
    // });
    // jQuery(".overflow-hidden1").click(function(){
    //     jQuery('body').removeClass('overflow-hidden1');
    // });

    $('.login').click(function(){
        $('body').removeClass('hidden');
      });
      $('body').click(function(){
        $('body').addClass('hidden');
      });


    $(".slides").slick({
        asNavFor: '.captions',
        infinite: true,
        speed: 500,
        arrows: true,
        autoplay: true,
        pauseOnHover: true,
        focusOnSelect: true,
        adaptiveHeight: true
      });
      
      $(".captions").slick({
        asNavFor: '.slides',
        infinite: true,
        speed: 500,
        fade: true,
        arrows: false,
        autoplay: true,   
        pauseOnHover: true,
        focusOnSelect: true,    
        adaptiveHeight: true
      });

     // datepicker
     $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });
   
      
})(jQuery);

    