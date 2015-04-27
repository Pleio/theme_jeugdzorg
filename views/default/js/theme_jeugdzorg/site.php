<?php ?>
elgg.provide("elgg.theme_jeugdzorg");

elgg.theme_jeugdzorg.init = function() {
	$(window).scroll(function() {
	
		var window_pos = $(window).scrollTop();
		var $banner = $(".theme-jeugdzorg-body-header-image");
		var $menu = $(".theme-jeugdzorg-body-header .elgg-menu-site");
		
		if (window_pos > $banner.outerHeight()) {
			$menu.addClass("theme-jeugdzorg-menu-fixed");
		} else {
			$menu.removeClass("theme-jeugdzorg-menu-fixed");
		}
	
	});
}

elgg.register_hook_handler('init', 'system', elgg.theme_jeugdzorg.init);