<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>
</div>
<div class="jumbotron">
	<div class="container">
		<h2 class="forum-title"><?php _e('Search', 'luna') ?></h2><span class="pull-right naviton"><?php echo $paging_links ?></span>
	</div>
</div>
<div class="container">
	<div class="list-group forumview list-group-topic">
		<?php draw_search_results(); ?>
	</div>