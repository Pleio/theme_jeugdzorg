<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */

$plugin_graphics = elgg_get_site_url() . "mod/theme_jeugdzorg/_graphics/";
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}

.elgg-page.elgg-page-default {
	padding-top: 0px; // SubsiteManager topbar fix
}


.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 48px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 45px auto 0;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: fixed;
	width: 100%;
	top: 0px;
	z-index: 1;
	background: #<?php echo THEME_COLOR_5; ?>;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 560px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 0px;
	float: right;
	width: 210px;
	margin: 0 0 0 25px;
}
.elgg-sidebar-alt {
	float: left;
    margin: 0 25px 0 0;
    padding: 20px;
    position: relative;
    width: 180px;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 20px 0;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}