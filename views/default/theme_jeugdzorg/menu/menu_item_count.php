<?php 

if($count = theme_jeugdzorg_menu_count_new_items($vars["id"], $vars["type"], $vars["subtype"], $vars["container_guid"])){
	echo "<span class='theme-jeugdzorg-update-count'>" . $count . "</span>";
}