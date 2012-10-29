var jListEspec = jQuery.noConflict();
//<![CDATA[ 
jListEspec(window).load(function(){
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
                
                this.children().each(function(index, element) {
                    totalHeight += $(element).innerHeight();
                });
                
                difference = totalHeight + parseInt(firstChild.css('margin-top'), 10);
                
                duration = (difference/pixelsPerSecond) * 1000;
                
                firstChild.animate(
                    { 'margin-top': -1 * totalHeight },
                    duration,
                    'linear',
                    function() {
                        firstChild.css('margin-top', marquee.innerHeight());
                        marquee.marquee('play');
                    }
                );
            },
            pause: function() {
                this.children(':first').stop();
            }
        };
    
        jListEspec.fn.marquee = function(method) {
    
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else if (typeof method === 'object' || !method) {
                return methods.init.apply(this, arguments);
            } else {
                jListEspec.error('Method ' + method + ' does not exist on jQuery.marquee');
            }
    
        };
    
    })(jQuery);
    
    var marquee = jListEspec('#mrq_especialidades_lista');
    
    marquee.marquee();
    
    marquee.hover(function() {
        marquee.marquee('pause');
    }, function() {
        marquee.marquee('play');    
    });
});//]]>