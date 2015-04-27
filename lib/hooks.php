<?php

	/**
	 * Make our own site menu
	 *
	 * @param string $hook
	 * @param string $entity_type
	 * @param array $returnvalue
	 * @param array $params
	 * @return array
	 */
	function theme_jeugdzorg_register_site_menu_handler($hook, $entity_type, $returnvalue, $params) {
		// we will make our own menu
		$menu_items = array();

		// activity
		$menu_items[] = ElggMenuItem::factory(array("name" => "activity",  "href" => "activity/all?type=object", "text" => elgg_echo("theme_jeugdzorg:menu:home")));

// 		if ($registered_entities = elgg_get_config("registered_entities")) {
// 			$allowed_subtypes = array("image", "videolist_item", "file", "blog", "event", "bookmarks", "groupforumtopic");
// 			$registerd_subtypes = $registered_entities["object"];

// 			foreach($allowed_subtypes as $subtype) {
// 				if (in_array($subtype, $registerd_subtypes)) {
// 					$menu_count = elgg_view("theme_jeugdzorg/menu/menu_item_count", array("id" => "activity_object_" . $subtype, "type" => "object", "subtype" => $subtype));

// 					$menu_items[] = ElggMenuItem::factory(array("name" => "activity_object_" . $subtype,  "href" => "activity/all?type=object&subtype=" . $subtype, "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("item:object:" . $subtype) . $menu_count, "parent_name" => "activity"));
// 				}
// 			}
// 		}

		// groups
		$menu_items[] = ElggMenuItem::factory(array("name" => "groups", "href" => "groups/all", "text" => elgg_echo("groups")));
		
		// faq
// 		$menu_items[] = ElggMenuItem::factory(array("name" => "faq",  "href" => "faq", "text" => elgg_echo("Vraag en antwoord")));
		
		
		// get groups with special flag
// 		$kennis_groups = array();
		$group_options = array(
			"type" => "group",
			"limit" => false,
			"metadata_name_value_pairs" => array(
				"name" => "show_in_kennisbank",
				"value" => "yes"
			),
			"joins" => array("JOIN " . elgg_get_config("dbprefix") . "groups_entity ge ON e.guid = ge.guid"),
			"order_by" => "ge.name ASC"
		);
		if ($groups = elgg_get_entities_from_metadata($group_options)) {
			foreach ($groups as $group) {
				$kennis_groups[] = $group->getGUID();

				$menu_items[] = ElggMenuItem::factory(array("name" => "kennisbank_" . $group->getGUID(),  "href" => $group->getURL(), "text" => $group->name));
			}
// 			// add site categories to last group
// 			if(elgg_is_active_plugin("categories")) {
// 				if ($categories = elgg_get_site_entity()->categories) {
// 					if (!is_array($categories)) {
// 						$categories = array($categories);
// 					}

// 					sort($categories);

// 					foreach ($categories as $category) {
// 						$menu_items[] = ElggMenuItem::factory(array(
// 								"name" => $category,
// 								"text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . $category,
// 								"href" => "categories/list?category=" . urlencode($category),
// 								"parent_name" => "kennisbank_" . $group->getGUID()
// 						));
// 					}
// 				}
// 			}
		}

		
		// members
		$menu_items[] = ElggMenuItem::factory(array("name" => "members", "href" => "members/all", "text" => elgg_echo("members")));

// 		$group_options = array(
// 			"type" => "group",
// 			"limit" => false,
// 			"joins" => array("JOIN " . elgg_get_config("dbprefix") . "groups_entity ge ON e.guid = ge.guid"),
// 			"order_by" => "ge.name ASC"
// 		);
// 		if ($user = elgg_get_logged_in_user_entity()) {
// 			// show my groups
// 			$group_options["relationship"] = "member";
// 			$group_options["relationship_guid"] = $user->getGUID();
// 		} else {
// 			// show featured groups
// 			$group_options["metadata_name_value_pairs"] = array(
// 				"name" => "featured_group",
// 				"value" => "yes"
// 			);
// 		}

// 		if($kennis_groups){
// 			$group_options["wheres"] = array("(e.guid NOT IN (" . implode(",", $kennis_groups) . "))");
// 		}

// 		if ($groups = elgg_get_entities_from_relationship($group_options)) {
// 			foreach ($groups as $group) {
// 				$menu_count = elgg_view("theme_jeugdzorg/menu/menu_item_count", array("id" => "groups_" . $group->getGUID(), "container_guid" => $group->getGUID()));

// 				$menu_items[] = ElggMenuItem::factory(array("name" => "groups_" . $group->getGUID(),  "href" => $group->getURL(), "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . $group->name . $menu_count, "parent_name" => "groups"));
// 			}
// 		}

// 		$menu_items[] = ElggMenuItem::factory(array("name" => "groups_all",  "href" => "groups/all", "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("groups:all"), "parent_name" => "groups"));

		// about
		$menu_items[] = ElggMenuItem::factory(array("name" => "about",  "href" => "about", "text" => elgg_echo("theme_jeugdzorg:menu:about")));

// 		$menu_items[] = ElggMenuItem::factory(array("name" => "about2",  "href" => "about", "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("expages:about"), "parent_name" => "about"));
// 		$menu_items[] = ElggMenuItem::factory(array("name" => "faq",  "href" => "faq", "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("theme_jeugdzorg:menu:faq"), "parent_name" => "about"));
// 		$menu_items[] = ElggMenuItem::factory(array("name" => "contact",  "href" => "contact", "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("theme_jeugdzorg:menu:contact"), "parent_name" => "about"));
// 		$menu_items[] = ElggMenuItem::factory(array("name" => "members",  "href" => "members", "text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . elgg_echo("members"), "parent_name" => "about"));

		// admin
		if(elgg_is_admin_logged_in()){
			$menu_items[] =	ElggMenuItem::factory(array("name" => "admin",  "href" => "admin", "text" => elgg_echo("admin"), "target" => "_blank"));
		}

		return $menu_items;
	}

	function theme_jeugdzorg_add_route_handler($hook, $entity_type, $returnvalue, $params) {

		if (!empty($returnvalue) && is_array($returnvalue)) {
			if (elgg_is_xhr()) {

				if (elgg_is_logged_in()) {
					echo "<div id='theme-jeugdzorg-river-popup-add'>";
					echo elgg_view("content_redirector/selector");
					echo "</div>";
				} else {
					echo "<div id='theme-jeugdzorg-river-popup-login'>";
					echo elgg_view_module("info", elgg_echo("login"), elgg_view_form("login"));
					echo "</div>";
				}

				return false;
			}
		}
	}

	function theme_jeugdzorg_activity_route_handler($hook, $entity_type, $returnvalue, $params) {
		$result = $returnvalue;
		$page = elgg_extract("segments", $returnvalue, array("all"));

		switch($page[0]) {
			case "all":
			case "owner":
			case "friends":
				$result = false;

				elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

				// make a URL segment available in page handler script
				$page_type = elgg_extract(0, $page, 'all');
				$page_type = preg_replace('[\W]', '', $page_type);


				if ($page_type == 'owner') {
					$page_type = 'mine';
				}
				set_input('page_type', $page_type);

				// content filter code here
				$entity_type = '';
				$entity_subtype = '';

				include(dirname(dirname(__FILE__)) . "/pages/activity/river.php");
		}

		return $result;
	}

	function theme_jeugdzorg_custom_index($hook, $entity_type, $returnvalue, $params){
		// fake the activity page
		set_input("type", "object");
		page_handler("activity", "");
		return true;
	}

	function theme_jeugdzorg_prepare_site_menu_handler($hook, $type, $return, $params) {
		if(array_key_exists("theme_jeugdzorg_menu_item_counters", $_SESSION)){
			if(isset($return["default"])){
				foreach($return["default"] as $menu_item){
					if($children = $menu_item->getChildren()){
						foreach($children as $child){
							if($child->getSelected()){
								$_SESSION["theme_jeugdzorg_menu_item_last_checked"][$child->getName()] = time();
								break(2);
							}
						}
					}
				}
			}
		}
	}

	function theme_jeugdzorg_groups_route_handler($hook, $entity_type, $returnvalue, $params){

		if (!empty($returnvalue) && is_array($returnvalue)) {
			$page = elgg_extract("segments", $returnvalue);

			switch($page[0]) {
				case "profile":
					set_input("guid", $page[1]);

					include(dirname(dirname(__FILE__)) . "/pages/groups/profile.php");

					$returnvalue = false;
					break;
			}
		}

		return $returnvalue;
	}

	function theme_jeugdzorg_register_categories_menu_handler($hook, $type, $returnvalue, $params) {
		$result = $returnvalue;

		if(elgg_is_active_plugin("categories")) {
			if ($categories = elgg_get_site_entity()->categories) {
				if (!is_array($categories)) {
					$categories = array($categories);
				}

				foreach ($categories as $category) {
					$result[] = ElggMenuItem::factory(array(
						"name" => $category,
						"text" => "<span class='theme-jeugdzorg-menu-icon'></span>" . $category,
						"href" => "categories/list?category=" . urlencode($category)
					));
				}
			}
		}

		return $result;
	}


	function theme_jeugdzorg_access_write_hook($hook, $type, $returnvalue, $params){
		$result = $returnvalue;

		if(is_array($result)){
			unset($result[ACCESS_LOGGED_IN]);
		}

		return $result;
	}
