<?php 

	elgg_load_library("elgg:groups");
	
	elgg_push_breadcrumb(elgg_echo("groups"), "groups/all");
	
	$guid = (int) get_input("guid");
	
	elgg_set_page_owner_guid($guid);
	elgg_push_context("group_profile");
	
	// turn this into a core function
	global $autofeed;
	$autofeed = true;
	
	$group = get_entity($guid);
	if (!$group || !elgg_instanceof($group, "group")) {
		forward("groups/all");
	}
	
	elgg_push_breadcrumb($group->name);
	$content = elgg_view("groups/profile/layout", array("entity" => $group));
	
	$sidebar = "";
	if (group_gatekeeper(false)) {
		if (elgg_is_active_plugin("search")) {
			$sidebar .= elgg_view("groups/sidebar/search", array("entity" => $group));
		}
		$sidebar .= elgg_view("groups/sidebar/members", array("entity" => $group));
	}
	
	groups_register_profile_buttons($group);
	
	$params = array(
		"content" => $content,
		"sidebar" => $sidebar,
		"title" => elgg_view_entity_icon($group, "tiny", array("img_class" => "mrs", "href" => false)) . $group->name,
		"filter" => "",
	);
	$body = elgg_view_layout("content", $params);
	
	echo elgg_view_page($group->name, $body);