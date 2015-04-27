<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

echo elgg_view("search/search_box");

// drop-down login
if(elgg_is_logged_in()){
	echo elgg_view('subsite_manager/account/dropdown');
} else {
	echo elgg_view('core/account/login_dropdown');
}

// insert site-wide navigation
// echo elgg_view_menu('site');