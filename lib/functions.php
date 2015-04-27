<?php 

	function theme_jeugdzorg_menu_count_new_items($id, $type = "", $subtype = "", $container_guid = ""){
		$result = false;
		
		if(empty($id)){
			return false;
		}
		
		if($user = elgg_get_logged_in_user_entity()){
			if(!isset($_SESSION["theme_jeugdzorg_menu_item_last_checked"])){
				$_SESSION["theme_jeugdzorg_menu_item_counters"] = array();
			}
			
			$timestamp = (int) $user->prev_last_login;
			
			if(isset($_SESSION["theme_jeugdzorg_menu_item_last_checked"][$id])){
				 $timestamp = $_SESSION["theme_jeugdzorg_menu_item_last_checked"][$id];
			}
			
			$options = array(
					"type" => $type,
					"subtype" => $subtype,
					"count" => true,
					"container_guid" => $container_guid,
					"created_time_lower" => $timestamp,
					"posted_time_lower" => $timestamp 
				);
			
			if(!empty($container_guid)){
				$options["wheres"] = array("e.owner_guid <> " . $user->getGUID());
				$result = elgg_get_entities($options);
			} else {
				$options["wheres"] = array("rv.subject_guid <> " . $user->getGUID());
				$result = elgg_get_river($options);
			}
		}
		
		return $result;
	}