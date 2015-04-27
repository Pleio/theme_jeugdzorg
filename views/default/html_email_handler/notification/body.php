<?php
	$title = $vars["title"];
	$message = nl2br($vars["message"]);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<base target="_blank" />
		
		<?php
			if(!empty($title)){
				echo "<title>" . $title . "</title>\n";
			}
		?>
	</head>
	<body>
		<style type="text/css">
			body {
				font-size: 11px;
				line-height: 17px;
				font-family: "Lucida Grande", Verdana, sans-serif;
				color: #<?php echo THEME_COLOR_2; ?>;
			}
			
			a {
				color: #<?php echo THEME_COLOR_3;?>;
			}
			
			img {
				border: none;
			}
			
			#notification_container {
				padding: 20px 0;
				width: 600px;
				margin: 0 auto;
			}
		
			#notification_header {
				padding: 0 0 10px 20px;
			}
			
			#notification_header a {
				text-decoration: none;
				font-weight: bold;
				color: #<?php echo THEME_COLOR_2;?>;
				font-size: 18px;
			}
		
			#notification_wrapper {
				background: #<?php echo THEME_COLOR_1;?>;
				padding: 10px;
			}
			
			#notification_wrapper h2 {
				margin: 5px 0 5px 10px;
				color: #<?php echo THEME_COLOR_2;?>;
				font-size: 16px;
				line-height: 20px;
			}
			
			#notification_content {
				background: #FFFFFF;
				padding: 10px;
			}
			
			#notification_content p {
				margin: 0px;
			}
						
			#notification_footer {
				
				padding: 10px;
				text-align: right;
			}
			
			#notification_footer_logo {
				float: left;
			}
			
			#notification_footer_logo img {
				border: none;
			}
			
			.clearfloat {
				clear:both;
				height:0;
				font-size: 1px;
				line-height: 0px;
			}
			
		</style>
	
		<div id="notification_container">
			<div id="notification_header">
				<a href="<?php echo $vars["config"]->site->url; ?>">
					<img title="<?php echo $vars["config"]->site->name; ?>" alt="<?php echo $vars["config"]->site->name; ?>" src="<?php echo $vars["config"]->site->url; ?>mod/theme_jeugdzorg/_graphics/header_text.png" />
				</a>
			</div>
			<div id="notification_wrapper">
				<?php if(!empty($title)) echo elgg_view_title($title); ?>
			
				<div id="notification_content">
					<?php echo $message; ?>
				</div>
			</div>
			
			<div id="notification_footer">
				<?php
					if(elgg_is_logged_in()){
						$settings_url = $vars["url"] . "settings";
						if(elgg_is_active_plugin("notifications")){
							$settings_url = $vars["url"] . "notifications/personal";
						}
						echo elgg_echo("html_email_handler:notification:footer:settings", array("<a href='" . $settings_url . "'>", "</a>"));
					}
				?>
				<div class="clearfloat"></div>
			</div>
		</div>
	</body>
</html>