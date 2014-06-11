(function ($) {
  Drupal.behaviors.george = {
    attach: function (context, settings) {
        
        var $stars = $('.star');
        var starHt = $stars.height();
        var starWidth = $stars.width();
        
        var origDim = {
            marginTop: $stars.css('marginTop'),
            marginLeft: $stars.css('marginLeft'),
            height: $stars.height(),
            width: $stars.width() + 2 * parseInt($stars.css('paddingLeft'), 10)
        };
        
        var upDim = {
            marginTop: '-650px',
            marginLeft: '-350px',
            height: '1900px',
            width: '1900px'
        };
        
        
        var $body = $('body');
        
        $stars.on('click', function(e) {
            
            $stars.not($(this)).fadeOut();
        
            $(this).animate(upDim);
            
            $body.addClass("star-up");
            
            $(this).removeClass("col-md-2 col-md-offset-1").addClass("big");
            
            e.stopPropagation();
            
            $(".block[rel='" + $(this).attr('id') + "']").fadeIn();
            //$("#main").fadeOut();
            
        });
        
        $body.on("click", function() {
            
            if($(this).hasClass("star-up")){
                $(".block").fadeOut();
                $stars.fadeIn();
                $(".big").animate(origDim, function(){ 
                    $(".big").removeClass("big").addClass("col-md-2 col-md-offset-1");
                });
            }
        
        });

    }
  };
})(jQuery);