<?php 
/*
	WP Post Template: Gallery
*/
?>
<?php get_header(); ?>

    <div class="container">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                    
                <div class="row">
                	<div class="col-xs-12 col-md-12">
                	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="image-align-center-label img-responsive"><?php the_post_thumbnail( 'medium' ); ?> </span>
					
                <p><?php the_content(); ?></p>
 
               <?php _e('Posted In &#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
    
 
<?php endwhile; ?>
 </br>
    <ul class="pager">
        <?php previous_post_link('< %link') ?>  |  <?php next_post_link(' %link >') ?>
    </ul>
 
<?php endif; ?>
</div>

</div>
</div>

<?php get_footer(); ?>