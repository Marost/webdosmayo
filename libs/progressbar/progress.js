var jProgBar=jQuery.noConflict();
(function( jProgBar ){
  jProgBar.fn.animateProgress = function(progress, callback) {
    return this.each(function() {
      jProgBar(this).animate({
        width: progress+'%'
      }, {
        duration: 2000,
 
        easing: 'swing',
 
        step: function( progress ){
          var labelEl = jProgBar('.ui-label', this),
              valueEl = jProgBar('.value', labelEl);
 
          if (Math.ceil(progress) < 20 && jProgBar('.ui-label', this).is(":visible")) {
            labelEl.hide();
          }else{
            if (labelEl.is(":hidden")) {
              labelEl.fadeIn();
            };
          }
 
          if (Math.ceil(progress) == 100) {
            labelEl.text('');
            setTimeout(function() {
              labelEl.fadeOut();
            }, 1000);
          }else{
            valueEl.text(Math.ceil(progress) + '%');
          }
        },
        complete: function(scope, i, elem) {
          if (callback) {
            callback.call(this, i, elem );
          };
        }
      });
    });
  };
})( jQuery );

jProgBar(document).ready(function() {
	
	jProgBar("#progress_bar").hide();
	jProgBar("#contenido").hide();
		
	jProgBar("#lista").change(function(){
		var lista=jProgBar(this).val();
		
		jProgBar.post("lista.php", {lista: lista},
		function(data){
			jProgBar("#progress_bar").show();
			jProgBar('#progress_bar .ui-progress .ui-label').hide();
			jProgBar('#progress_bar .ui-progress').css('width', '7%');
		 
			jProgBar('#progress_bar .ui-progress').animateProgress(43, function() {
				jProgBar(this).animateProgress(79, function() {
					setTimeout(function() {
						jProgBar('#progress_bar .ui-progress').animateProgress(100, function(){
							jProgBar("#contenido").show();
							jProgBar("#datos").html(data);
							jProgBar("#progress_bar").hide();
						});
					}, 2000);
				});
			});			
		});		
	});	 
});

