<?php

	if (($page_owner = elgg_get_page_owner_entity()) && elgg_instanceof($page_owner, "group")) {
// 		if ($page_owner->show_in_kennisbank == "yes") {
// 			echo elgg_view_menu("categories");
// 		}
	} elseif(elgg_in_context("categories")) {
		echo elgg_view_menu("categories");
	}