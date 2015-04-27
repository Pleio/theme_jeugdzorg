<?php

$plugin = elgg_extract("entity", $vars);

// Twitter sidebar query
echo "<div>";
echo elgg_echo("theme_jeugdzorg:settings:twitter_query");
echo elgg_view("input/text", array("name" => "params[twitter_query]", "value" => $plugin->twitter_query));
echo "</div>";

echo "<div>";
echo elgg_echo("theme_jeugdzorg:settings:river_header");
echo elgg_view("input/longtext", array("name" => "params[river_header]", "value" => $plugin->river_header));
echo "</div>";