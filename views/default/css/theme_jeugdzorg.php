<?php
$plugin_graphics = elgg_get_site_url() . "mod/theme_jeugdzorg/_graphics/";
?>

* {
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
}

.elgg-page-header .elgg-search {
	position: absolute;
	right: 100px;
	top: 10px;
	height: 25px;
	border: 1px solid #<?php echo THEME_COLOR_1;?>;
	background: white;
}

.elgg-search input.search-input[type="text"] {
	width: 150px;
	color: #CCC;
	height: 25px;
	border-left: 1px solid #CCC;
}

.search-advanced-type-selection > li > a {
	color: #CCC;
	background: none;
	height: 25px;
	line-height: 25px;
}

.search-advanced-type-selection-dropdown {
	border-color: #CCC;
	right: -1px;
	top: 20px;
}

.search-advanced-type-selection-dropdown a:hover {
	background: #CCC;
}

#subsite-manager-login-dropdown {
	top: 10px;
}

#login-dropdown {
	top: 12px;
}

a.subsite-manager-account-dropdown-button {
	line-height: 21px;
}

.subsite-manager-account-dropdown-button .elgg-avatar {
	margin: 0px;
}

.profile {
	width: 100%;
}

#profile-owner-block {
	float: right;
}

.elgg-form-groups-search .elgg-input-search{
	width: 160px;
	margin-right: 10px;
}

.elgg-river-layout .elgg-input-dropdown {
	position: absolute;
    right: 0;
    top: 55px;
    margin: 0px;
    display: none;
}

.theme-jeugdzorg-update-count {
	padding: 0px 8px;
	margin-left: 10px;
	background: #<?php echo THEME_COLOR_3; ?>;
	color: white;
}

.event_manager_event_list_icon_month {
	background-color: #<?php echo THEME_COLOR_3;?>;
	border-color: #<?php echo THEME_COLOR_3;?>;
}

.event_manager_event_list_icon_day {
	border-color: #<?php echo THEME_COLOR_3;?>;
}
.theme-jeugdzorg-river-add {
	background: #CF0D0D;
	text-align: center;
	margin-bottom: 10px;
}
.theme-jeugdzorg-river-add a {
	color: white;
	display: inline-block;
	line-height: 40px;
	width: 100%;
	font-weight: bold;
	text-decoration: none;
}

#theme-jeugdzorg-river-popup-add {
	width: 650px;
}
#theme-jeugdzorg-river-popup-login {
	width: 350px;
}

.elgg-menu-entity {
	float: none;
	text-align: right;
}

.theme-jeugdzorg-object-summary-title {
	font-size: 15px;
	line-height: 20px;
	font-weight: bold;
}

.theme-jeugdzorg-object-summary-title a {
	color: #<?php echo THEME_COLOR_2; ?>;
}

a.theme-jeugdzorg-object-summary-category {
	color: #<?php echo THEME_COLOR_3; ?>;
}

a.theme-jeugdzorg-object-summary-toggle {
	text-decoration: none;
	color: #CCC;
}

.theme-jeugdzorg-object-summary-toggle-down {
	display: none;
}
.elgg-state-active .theme-jeugdzorg-object-summary-toggle-down {
	display: inline;
}
.elgg-state-active .theme-jeugdzorg-object-summary-toggle-right {
	display:none;
}

.theme-jeugdzorg-sidebar-event .theme-jeugdzorg-object-summary-toggle,
.theme-jeugdzorg-sidebar-event .theme-jeugdzorg-list-icon {
	display: none;
}

.tidypics-gallery > li {
	padding: 0 4px;
}

.tidypics-lightbox .elgg-photo {
	width: 500px;
}

.videolist-watch {
	margin: 10px 0 0 0;
}

.elgg-item .elgg-image-block {
	padding: 10px 0;
}

.elgg-heading-main img {
	vertical-align: middle;
}

.elgg-main .elgg-form-search-advanced-search .float-alt {
	display: none;
}

#advanced-comments-form {
	display: none;
}

.elgg-menu-categories {
	padding-bottom: 10px;
}

.elgg-menu-item-visie-en-beleid .theme-jeugdzorg-menu-icon {
	background-position: 0 -48px;
}
.elgg-menu-item-praktijkvoorbeelden .theme-jeugdzorg-menu-icon {
	background-position: 0 -64px;
}
.elgg-menu-item-feiten-en-cijfers .theme-jeugdzorg-menu-icon {
	background-position: 0 -112px;
}

.theme-jeugdzorg-list-icon {
	width: 32px;
	height: 32px;
	float: left;
	margin: 2px;
	background: transparent url('<?php echo $plugin_graphics; ?>icons_32.png') bottom left no-repeat;
}

.theme-jeugdzorg-list-icon.theme-jeugdzorg-category-visie-en-beleid {
	background-position: 0 -96px;
}

.theme-jeugdzorg-list-icon.theme-jeugdzorg-category-praktijkvoorbeelden {
	background-position: 0 -128px;
}

.theme-jeugdzorg-list-icon.theme-jeugdzorg-category-feiten-en-cijfers {
	background-position: 0 -224px;
}

.theme-jeugdzorg-object-summary-more {
	padding-left: 36px;
}

#entity-tools-listing-table .elgg-input-datetime {
	width: 115px;
}

#entity-tools-listing-table .elgg-input-dropdown {
	width: 75px;
}

.elgg-list .elgg-item-user .elgg-image-block > .elgg-image {
	display: block;
}
.elgg-list .elgg-item-user .elgg-menu-entity {
	float: right;
}

.theme-jeugdzorg-body-header-image {
	height: 248px;
	position: relative;
}

.theme-jeugdzorg-body-header-image > img {
	width: 990px;
	height: 248px;
}

.theme-jeugdzorg-menu-fixed {
	position: fixed;
	top: 48px;
	z-index: 1;
}

#profile-details > h2,
.elgg-layout-one-sidebar > .elgg-main > h2 {
	color: #<?php echo THEME_COLOR_2; ?>;
}

.feedEkList li {
	margin-bottom: 5px;
}

.theme-jeugdzorg-page-description {
	font-size: 16px;
    line-height: 20px;
    margin-bottom: 10px;
}

.theme-jeugdzorg-social-links {
	position: absolute;
	right: 0;
	bottom: 0;
	background: white;
	padding: 8px;
	border: 2px solid #<?php echo THEME_COLOR_3; ?>;
	border-bottom: 0px;
	
	font-size: 16px;
	
}

.theme-jeugdzorg-social-links .fa {
	color:#<?php echo THEME_COLOR_3; ?>;
}