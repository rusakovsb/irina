(function ($) {
  Drupal.behaviors.irinaScripts = {
    attach: function(context, settings) {

	    $(".social-icon").each(function() {
        var attr = $(this).attr('data-image-src');
        $(this).css('background-image', 'url('+attr+')');      
      }); 

      $(".view-galleries").imagesLoaded( { background: true }, function() {
        $("#overlay").fadeOut(200);  
        TweenMax.staggerTo(".galleries-item", 0.25, {
          ease: Power0.easeNone,
          opacity: "1"          
        }, 0.1);    
      });

      $(".masonry").imagesLoaded( function() {
        $(".masonry .view-content").masonry({      
          itemSelector: '.masonry-item',
        });
        $("#overlay").fadeOut(200);  
        TweenMax.staggerTo(".masonry-item", 0.25, {
          ease: Power0.easeNone,
          opacity: "1"          
        }, 0.1);          
      });


    
    }
  };
})(jQuery);  