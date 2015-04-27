<?php

	if (elgg_in_context("activity") && elgg_is_active_plugin("event_manager")) {
		$options = array(
			"limit" => 5
		);
		
		$event_results = event_manager_search_events($options);
		
		if ($event_results["count"]) {
			$events_list = "";
			
			foreach ($event_results["entities"] as $entity) {
				$start_day = $entity->start_day;
				
				$icon = "<div class='event_manager_event_list_icon' title='" . date(EVENT_MANAGER_FORMAT_DATE_EVENTDAY, $start_day) . "'>";
				$icon .= "<div class='event_manager_event_list_icon_month'>" . strtoupper(date("M", $start_day)) . "</div>";
				$icon .= "<div class='event_manager_event_list_icon_day'>" . date("d", $start_day) . "</div>";
				$icon .= "</div>";
				
				$subtitle = "";
				if($venue = $entity->venue) {
					$subtitle = $venue;
				}
				
				if($start_time = $entity->start_time) {
					if(!empty($subtitle)) {
						$subtitle .= " - ";
					}
					
					$subtitle .= date("G:i", $start_time);
				}
				
				$params = array(
					"entity" => $entity,
					"metadata" => "",
					"subtitle" => $subtitle,
					"tags" => false
				);
				
				$list_body = elgg_view('object/elements/summary', $params);
				
				$events_list .= elgg_view_image_block($icon, $list_body, array("class" => "theme-jeugdzorg-sidebar-event"));
			}
		} else {
			$events_list = elgg_echo("event_manager:list:noresults");
		}
		
		$title = elgg_view("output/url", array("text" => elgg_echo("event_manager:list:title"), "href" => "events"));
		
		echo elgg_view_module("aside", $title, $events_list);
	}
	