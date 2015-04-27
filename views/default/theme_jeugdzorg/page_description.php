<?php

// if (elgg_in_context("activity") && (elgg_extract("filter_context", $vars) == "all")) {
// 	echo "<div class='theme-jeugdzorg-page-description'>";
// 	echo "Landelijk platform dat een werkplek biedt voor de aankomende transitie en transformatie. Lever ook jouw bijdrage aan oplossingen om kinderen en jongeren op weg te helpen naar een zelfstandige toekomst.";
// 	echo "</div>";
// }

if (elgg_in_context("groups") && (get_input("page") == "all")) {
	echo "<div class='theme-jeugdzorg-page-description'>";
	echo "Werk samen in de groepen om jongeren op weg te helpen naar een zelfstandige toekomst.<br /><a href='http://www.netwerkjeugd.nl/groups/profile/24675422/tips-voor-je-groep-op-netwerk-jeugd'>Tips voor je groep op Netwerk Jeugd.</a>";
	echo "</div>";
}