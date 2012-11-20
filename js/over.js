jQuery(document).ready(function(){
	jQuery('div.galleries section').mouseenter(function() {
		jQuery(this).find('div.details').fadeIn();
	}).mouseleave(function() {
	    jQuery(this).find('div.details').fadeOut();
	  });
});