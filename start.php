<?php

	define("THEME_COLOR_1", "EDE9E6"); // (background + page titles) grey
	define("THEME_COLOR_2", "58585a"); // font color
	define("THEME_COLOR_3", "4E8FC8"); // link / button
	define("THEME_COLOR_4", "E2DBCF"); // list seperator line
	define("THEME_COLOR_5", "FFEC18"); // yellow

	define("THEME_LISTING_SHOW_DETAILS", 3);

	require_once(dirname(__FILE__) . "/lib/hooks.php");
	require_once(dirname(__FILE__) . "/lib/functions.php");

	elgg_register_event_handler("init", "system", "theme_jeugdzorg_init");

	function theme_jeugdzorg_init() {
		// register external libraries
		elgg_register_js('elgg.friendspicker', 'mod/theme_jeugdzorg/vendors/elgg/ui.friends_picker.js');

		// extend views
		elgg_extend_view("css/elgg", "css/theme_jeugdzorg");
		elgg_extend_view("js/elgg", "js/theme_jeugdzorg/site");

		elgg_extend_view("profile/details", "theme_jeugdzorg/profile/activity");

		elgg_extend_view("page/elements/sidebar", "theme_jeugdzorg/sidebar/login", 1);
		elgg_extend_view("page/elements/sidebar", "theme_jeugdzorg/sidebar/events");
		elgg_extend_view("page/elements/sidebar", "theme_jeugdzorg/sidebar/rss", 999);
		elgg_extend_view("page/elements/owner_block", "theme_jeugdzorg/sidebar/categories", 250);
		elgg_extend_view("page/elements/owner_block", "theme_jeugdzorg/sidebar/group_folders");

		elgg_extend_view("page/layouts/content/header", "theme_jeugdzorg/page_description", 250);
		elgg_extend_view("object/elements/full", "theme_jeugdzorg/share_content");
		
		elgg_extend_view("page/layouts/content/filter", "theme_jeugdzorg/river/header", 400);

		// events
		elgg_register_event_handler("pagesetup", "system", "theme_jeugdzorg_pagesetup");

		// plugin hooks
		elgg_register_plugin_hook_handler("register", "menu:site", "theme_jeugdzorg_register_site_menu_handler");
		elgg_register_plugin_hook_handler("register", "menu:categories", "theme_jeugdzorg_register_categories_menu_handler");
		elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
		elgg_register_plugin_hook_handler("prepare", "menu:site", "theme_jeugdzorg_prepare_site_menu_handler");
		elgg_register_plugin_hook_handler("route", "add", "theme_jeugdzorg_add_route_handler");
		elgg_register_plugin_hook_handler("route", "groups", "theme_jeugdzorg_groups_route_handler");
		elgg_register_plugin_hook_handler("route", "activity", "theme_jeugdzorg_activity_route_handler");

		elgg_register_plugin_hook_handler("index", "system", "theme_jeugdzorg_custom_index");
		elgg_register_plugin_hook_handler("access:collections:write", "user", "theme_jeugdzorg_access_write_hook");
		// everything should have a default limit of 25
		set_input("limit", (int) get_input("limit", 25));
	}
