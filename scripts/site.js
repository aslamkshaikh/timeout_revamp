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
    
      
})(jQuery);

    