<!-- BEGIN SHOW/HIDE MAIN MENU -->
jQuery('.menu-button').toggle(
	function() {
		jQuery('#menu, #menu-index, .menu-tooltip, .menu-tooltip-index').addClass('menu-active');
		jQuery('.menu-button').addClass('menu-button-hover');
	},
	function() {
		jQuery('#menu, #menu-index, .menu-tooltip, .menu-tooltip-index').removeClass('menu-active');
		jQuery('.menu-button').removeClass('menu-button-hover');
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
});


jQuery(".menu-button").hover(
	function() {
		jQuery(".menu-button").addClass("menu-button-hover-touch");
	},
	function() {
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
});
<!-- END SHOW/HIDE MAIN MENU -->


<!-- BEGIN AUTO-EXPAND TEXTAREA -->
jQuery(document).ready(function() {
	jQuery( "textarea" ).autogrow();
});
<!-- END AUTO-EXPAND TEXTAREA -->


<!-- BEGIN TEXTAREA/FIELD EMPTY ON CLICK -->
function onBlur(el) {
    if (el.value == '') {
        el.value = el.defaultValue;
    }
}
function onFocus(el) {
    if (el.value == el.defaultValue) {
        el.value = '';
    }
}
<!-- END TEXTAREA/FIELD EMPTY ON CLICK -->

<!-- BEGIN TOP SLIDE MENU -->
jQuery('#top-slide-menu').hide();
jQuery('#menu-button').toggle(

    function() {
		jQuery('#top-slide-menu').show(0).animate({opacity: 1}, 300);
    },
	
    function() {
	  
        jQuery('#top-slide-menu').animate({opacity: 0}, 0).hide(0)
    }
);

<!-- END TOP SLIDE MENU -->