<?php 
/*
	Template Name: page
*/
?>
<?php get_header(); ?>

    <div class="container">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
            <div class="entry">
            <?php the_content(); ?>
 
                <p class="postmetadata2">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                </p>
 
            </div>

 
<?php endwhile; ?>
 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
<?php endif; ?>

</div>

</div>

<?php get_footer(); ?>