var jTab=jQuery.noConflict();
jTab(document).ready(function(){
	tabs.init();
});

tabs = {
	init : function(){
		jTab('#nwi-pest').each(function(){
			jTab(this).find('.pest-content:gt(0)').hide();

			jTab(this).find('ul.nav a').click(function(){
				jTab(this).parents('#nwi-pest').find('.pest-content').hide();
				jTab(jTab(this).attr('href')).show();

				jTab(this).parent().addClass('selected').siblings().removeClass('selected');

				return false;
			});
		});
		
	}
}