<?php 

	if (elgg_in_context("activity") || elgg_in_context("group_profile")) {
		elgg_load_js("lightbox");
		
		$url = "add";
		
		$url_extra = array();
		
		if(elgg_get_page_owner_entity() instanceof ElggGroup){
			// add preselected container_guid
			$url_extra[] = "container_guid=" . elgg_get_page_owner_guid();
		}
		
		if($subtype = preg_replace('[\W]', '', get_input('subtype', ''))){
			// add preselected content_type
			$content_types = array(
				"image" => "tidypics",
				"videolist_item" => "videolist",
				"file" => "file",
				"blog" => "blog",
				"event" => "event_manager",
				"bookmarks" => "bookmarks",
				"groupforumtopic" => "groups"
			);
			$content_type = elgg_extract($subtype, $content_types);
			if ($content_type) {
				$url_extra[] = "content_type=" . $content_type;
			}
		}
		
		if(!empty($url_extra)){
			$url .= "?" . implode("&" , $url_extra);
		}
				
		echo "<div class='theme-jeugdzorg-river-add'>";
		echo elgg_view("output/url", array("text" => elgg_echo("theme_jeugdzorg:add"), "href" => $url, "class" => "elgg-lightbox"));
		echo "</div>";
	}