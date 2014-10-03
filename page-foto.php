<?php 
/*
	Template Name: Foto
*/
?>
<?php get_header(); ?>
<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<br>
		<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); 
		$wp_query->query('cat=7&posts_per_page=6');
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="col-xs-12 col-md-4">
			<?php if(has_post_thumbnail()) {
    		the_post_thumbnail('custombig', array( 'class' => 'img-responsive img-thumbnail' ) );
			} else {
   		 echo "<img src=http://localhost/wordpress/wp-content/themes/sempugi/images/no-pic.png width='400' height='420' class='img-responsive' />
  		
			";
		} ?>
		<h3 class="text-center"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
		<h5 class="text-warning text-center"><?php _e('Posted In &#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?> | <?php the_time(__('j F Y', 'example')); ?> | <?php edit_post_link(__('Edit', 'example'), ' <span class="sep">|</span> <span class="edit">', '</span> '); ?></h5>
		</div>
		
		<?php endwhile; ?>
				
		<?php /* Error 404 */ ?>
		<?php $filename = TEMPLATEPATH . '/404.php'; if (file_exists($filename)) { include($filename); } ?>
		<?php if ($posts_per_page > 1) { ?>
		
		<ul class="pager">
			<li><?php next_posts_link('&laquo; Previous Posts'); ?></li>
			<li><?php previous_posts_link('Newer Posts &raquo;'); ?></li>
		</ul>

		<?php } else { ?>

			<ul class="pager"><?php next_posts_link('&laquo; Previous Posts'); ?></ul>
		

		<?php } ?>

		<?php wp_reset_query(); ?>
				
	
		</div>
		
		</div>
	</div>
	<span class=""></span>
<?php get_footer(); ?>