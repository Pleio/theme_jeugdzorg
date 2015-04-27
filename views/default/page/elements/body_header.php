<?php

$rss_link = elgg_http_add_url_query_elements(current_page_url(), array("view" => "rss"));

?>
<div class="theme-jeugdzorg-body-header">
	<div class="theme-jeugdzorg-body-header-image">
		<img src="<?php echo elgg_get_site_url(); ?>mod/theme_jeugdzorg/_graphics/banners/banner_<?php echo rand(1,3); ?>.png" />
		<div class="theme-jeugdzorg-social-links">
			volg ons ook via
			<a href='http://twitter.com/netwerkjeugd' target='_blank'><i class="fa fa-twitter fa-1x"></i></a>
			<a href='http://eepurl.com/PD_XD' target='_blank'><i class="fa fa-envelope fa-1x"></i></a>
			<a href='<?php echo $rss_link; ?>' target='_blank'><i class="fa fa-rss fa-1x"></i></a>
		</div>
	</div>
	
	<?php echo elgg_view_menu("site", array("sort_by" => "register")); ?>
</div>