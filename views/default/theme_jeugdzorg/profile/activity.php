<?php 

	$options = array(
		"subject_guid" => elgg_get_page_owner_guid(),
		"limit" => 5,
		"pagination" => false
	);
	
	if ($activity = elgg_list_river($options)) {
		echo elgg_view_module("aside", "", $activity, array("class" => "phl"));
	}