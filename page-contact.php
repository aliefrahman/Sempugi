<?php 
/*
	Template Name: Contact Form
*/
?>
<?php get_header(); ?>

        <div class="container">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">.
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
      
        <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
            <p align="center">
            <?php the_content(); ?>
 			</p>
 
<?php endwhile; ?>
 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
<?php endif; ?>
</div>
</div>
</div>

<?php get_footer(); ?>