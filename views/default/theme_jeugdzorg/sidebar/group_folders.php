<?php

	$page_owner = elgg_get_page_owner_entity();

	if (!empty($page_owner) && elgg_instanceof($page_owner, "group")) {
		if (elgg_in_context("group_profile") && ($page_owner->file_enable != "no")) {
			if (elgg_is_active_plugin("file_tools") && file_tools_use_folder_structure()) {
					echo elgg_view("file_tools/list/tree");
						
					?>
					<script type="text/javascript">
						$(window).hashchange(function() {
							var new_hash = window.location.hash.substring(1);

							if (new_hash != ""){
								if ($('#file_tools_list_files_container').length == 0) {
									document.location.href = "<?php echo elgg_get_site_url() . "file/group/" . $page_owner->getGUID() . "/all#"; ?>" + new_hash;
								}
							}
						});
					</script>
					<?php
			}
		}
	}
