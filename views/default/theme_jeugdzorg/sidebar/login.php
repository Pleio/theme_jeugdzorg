<?php 

	if (!elgg_is_logged_in() && !elgg_in_context("groups") && !elgg_in_context("register")) {
		echo elgg_view_module("aside", elgg_echo("login"), elgg_view_form("login"));
	}