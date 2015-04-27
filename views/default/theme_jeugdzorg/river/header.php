<?php
/**
 * Prefix on the index page to allow for custom text
 */

if (elgg_in_context("activity")) {
	
	$content = elgg_get_plugin_setting("river_header", "theme_jeugdzorg");
	if (!empty($content)) {
		echo elgg_view("output/longtext", array("value" => $content, "class" => "mbm"));
	}
}