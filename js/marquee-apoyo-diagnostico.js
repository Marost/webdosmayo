var jAnClic = jQuery.noConflict();
//<![CDATA[ 
jAnClic(window).load(function(){
    (function($) {
    
        var methods = {
            init: function(options) {
                this.children(':first').stop();
                this.marquee('play');
            },
            play: function() {
                var marquee = this,
                    pixelsPerSecond = 10,
                    firstChild = this.children(':first'),
                    totalHeight = 0,
                    difference,
                    duration;
                
                // Find the total height of the children by adding each child's height:
                this.children().each(function(index, element) {
                    totalHeight += $(element).innerHeight();
                });
                
                // The distance the divs have to travel to reach -1 * totalHeight:
                difference = totalHeight + parseInt(firstChild.css('margin-top'), 10);
                
                // The duration of the animation needed to get the correct speed:
                duration = (difference/pixelsPerSecond) * 1000;
                
                // Animate the first child's margin-top to -1 * totalHeight:
                firstChild.animate(
                    { 'margin-top': -1 * totalHeight },
                    duration,
                    'linear',
                    function() {
                        // Move the first child back down (below the container):
                        firstChild.css('margin-top', marquee.innerHeight());
                        // Restart whole process... :)
                        marquee.marquee('play');
                    }
                );
            },
            pause: function() {
                this.children(':first').stop();
            }
        };
    
        jAnClic.fn.marquee = function(method) {
    
            // Method calling logic
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else if (typeof method === 'object' || !method) {
                return methods.init.apply(this, arguments);
            } else {
                jAnClic.error('Method ' + method + ' does not exist on jQuery.marquee');
            }
    
        };
    
    })(jQuery);
    
    var marquee = jAnClic('#mrq_ap_diagnostico_lista');
    
    marquee.marquee();
    
    marquee.hover(function() {
        marquee.marquee('pause');
    }, function() {
        marquee.marquee('play');    
    });
});//]]>