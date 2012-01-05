jQuery.noConflict();

/* jQuery(window).load(function(){

	// Hide & FadeIn elements on page load
	var $fadingelements = jQuery('body');
	$fadingelements.hide().fadeIn(500);

}); */

jQuery(document).ready(function(){

	// Add Superfish Drop Downs to the menu area
    jQuery(".sf-menu").superfish({ 
        delay:       400,                               // delay on mouseout 
        animation:   {opacity:'show',height:'show'},    // fade-in and slide-down animation 
        speed:       'fast',                            // faster animation speed 
		easing: 	 'easeInOutQuint',					// easing
        autoArrows:  false,                             // disable generation of arrow mark-up 
        dropShadows: false                              // disable drop shadows 
    }); 

});