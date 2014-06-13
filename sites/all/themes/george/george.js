(function ($) {
  Drupal.behaviors.george = {
    attach: function (context, settings) {
        
        var $stars = $('.star');
        var starHt = $stars.height();
        var starWidth = $stars.width();
    
        var $body = $('body').addClass('closer');
        
        
        $stars.on('click', function(e) {
            
            // Clicks don't continue.
            e.stopPropagation();

            $("#card").toggleClass('flipped');
            
            var $thisStar = $(this);
            var out = setTimeout(function(){
                 $(".block[rel='" + $thisStar.attr('id') + "']").fadeIn();
            
            }, 1000);
           
            
        });
        
        
        $('.closer').on("click", function() {
            
            if($body.hasClass("star-up")){
                $(".block").fadeOut();
                
                $(".big").show();
                $body.removeClass("star-up");
                
             
                $('.big').animate(origDim, function(){ 
                    $(".big").removeClass("big").addClass("col-md-2 col-md-offset-1").css("position", "relative");
                    $stars.css("visibility", "visible");
                });

                
            }
        
        });

    },
    
    rearrange: function() {
        
        //var marg = 
    
    }
    
  };
})(jQuery);