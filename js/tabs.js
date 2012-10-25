$(function(){
	tabs.init();
});

tabs = {
	init : function(){
		$('#nwi-pest').each(function(){
			$(this).find('.pest-content:gt(0)').hide();

			$(this).find('ul.nav a').click(function(){
				$(this).parents('#nwi-pest').find('.pest-content').hide();
				$($(this).attr('href')).show();

				$(this).parent().addClass('selected').siblings().removeClass('selected');

				return false;
			});
		});
		
	}
}