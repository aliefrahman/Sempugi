<br>
<ul class="list-inline">
<?php if ( !dynamic_sidebar('page') ) : // the ID of the sidebar ?>
<h3><?php _e( 'Arsip'); ?></h3>
<?php wp_get_archives('type=monthly'); ?>
<?php endif; // end primary widget area ?>
</ul>