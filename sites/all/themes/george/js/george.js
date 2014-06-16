(function ($) {
  Drupal.behaviors.george = {
    attach: function (context, settings) {
        
        var $stars = $('.star');
        var $body = $('body').addClass('closer');
        var curStar = "";
        
        if($('html').hasClass("csstransforms3d")) {
        	$("#card .back").show();
        }
        
        $stars.not('.star-fake').on('click', function(e) {
            
			// Clicks don't continue.
			e.stopPropagation();
			
			// Open or close.
			if(!$body.hasClass("onBack")) {
				Drupal.behaviors.george.flipOpen(this);
			} else {
				var reopen = $(this).attr("id") != curStar;
				Drupal.behaviors.george.flipBack(reopen, this);
			}
           
           	curStar = $(this).attr("id");
           
		});

    },
    
    flipOpen: function(star) {
    	$('body').addClass("onBack");
	    
	    if($('html').hasClass("csstransforms3d")) {
        	$("#card").toggleClass('flipped');
        } else {
        	$('#card .front').fadeOut();
        	$("#card .back").fadeIn();
        }
        
        var out = setTimeout(function(){
             $(".block[rel='" + $(star).attr('id') + "']").fadeIn();
        
        }, 1000);
    },

    
    flipBack: function(reopen, newStar) {
    	$('body').removeClass("onBack");
    
        $(".block").fadeOut("fast");
        
        if($('html').hasClass("csstransforms3d")) {
        	$("#card").toggleClass('flipped');
        } else {
        	$('#card .back').fadeOut();
        	$("#card .front").fadeIn();
        }
        
        if(reopen) {
        	var out = setTimeout(function(){
        		Drupal.behaviors.george.flipOpen(newStar);
        	}, 1000);
        }
    }
    
  };
})(jQuery);