(function ($) {
  Drupal.behaviors.george = {
    attach: function (context, settings) {
        
        var $stars = $('.star');
        var $body = $('body').addClass('closer');
        var curStar = "";
        
        $stars.not('.star-fake').on('click', function(e) {
            
			// Clicks don't continue.
			e.stopPropagation();
			
			// Open or close.
			if(!$body.hasClass("back")) {
				Drupal.behaviors.george.flipOpen(this);
			} else {
				var reopen = $(this).attr("id") != curStar;
				Drupal.behaviors.george.flipBack(reopen, this);
			}
           
           	curStar = $(this).attr("id");
           
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
    
    flipOpen: function(star) {
    	$('body').addClass("back");
	            
        $("#card").toggleClass('flipped');
        
        var out = setTimeout(function(){
             $(".block[rel='" + $(star).attr('id') + "']").fadeIn();
        
        }, 1000);
    },

    
    flipBack: function(reopen, newStar) {
    	$('body').removeClass("back");
    
        $(".block").fadeOut("fast");
        $("#card").toggleClass('flipped');
        
        if(reopen) {
        	var out = setTimeout(function(){
        		Drupal.behaviors.george.flipOpen(newStar);
        	}, 1000);
        }
    }
    
  };
})(jQuery);