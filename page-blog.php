<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
				<br>
		<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=6' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="media">
  		 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="pull-left">
   		 	<?php if(has_post_thumbnail()) {
    		the_post_thumbnail('customsmall', array('class' => 'img-responsive'));
			} else {
   		 echo "<img src=http://localhost/wordpress/wp-content/themes/sempugi/images/no-pic.png width='200' class='img-responsive' />
  		
			";
		} ?>
 		 </a>
 		 <div class="media-body">
    		<h4 class="media-heading"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h4>
   			 <h5 class="text-warning"><?php _e('Posted In &#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?> | <?php the_time(__('j F Y', 'example')); ?> | <?php edit_post_link(__('Edit', 'example'), '<span class="edit">', '</span> '); ?></h5>
   			 <p class="text-primary">
		<?php the_excerpt(); ?>
		</p>
 		 </div>
		</div>
		
		<?php endwhile; ?>
		
		<div class="clearfix"></div>
		<?php if ($paged > 1) { ?>

		<ul class="pager">
			<li><?php next_posts_link('&laquo; Sebelumnya'); ?></li>
			<li><?php previous_posts_link('Terbaru &raquo;'); ?></li>
		</ul>

		<?php } else { ?>

			<ul class="pager"><li><?php next_posts_link('&laquo; Sebelumnya'); ?></li></ul>
		
		<?php } ?>

		<?php wp_reset_query(); ?>
		</div>
		<div class="col-xs-12 col-md-4"><?php get_sidebar( 'primary' ); ?></div>
		
		</div>
	</div>

<?php get_footer(); ?>