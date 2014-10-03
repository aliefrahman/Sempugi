<?php get_header(); ?>

    <div class="container">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="row">
                        <div class="post">
                            <div class="col-xs-12 col-sm-6 col-md-8">
                            	<br>
                            <h2><?php the_title(); ?> <?php edit_post_link(' | Edit', '', '  '); ?></h2>
                            <p class="small-text"><?php the_time('j F Y ') ?> | Posted In : <?php the_category(', ') ?>  </p>
                            
                            <?php the_content(); ?>
                            <div class="multipage"><?php wp_link_pages(); ?></div>
                            <?php the_tags(); ?>
                          
                            <div class="author">
                                <div class="col-xs-12 col-sm-4 col-md-2">
                                    <?php echo get_avatar(get_the_author_email(), '100'); ?>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-10">
                                	<p><strong><?php the_author_posts_link(); ?></strong></p>
                                    <p><?php the_author_description(); ?></p>
                                    <a href="<?php the_author_meta('facebook', $current_author->ID); ?>">Facebook</a> |
                                    <a href="<?php the_author_meta('twitter', $current_author->ID); ?>">Twitter</a> |
                                    <a href="<?php the_author_meta('linkedin', $current_author->ID); ?>">linkedin</a>
                                </div>
                                </div>
        			

 				<?php comments_template( '', true ); ?>

                            </div>
                            <div class="col-xs-12 col-md-4"><?php get_sidebar( 'primary' ); ?></div>
                            
                        </div>
                        
                        <?php endwhile; wp_reset_query(); ?>
                        
                        <?php else : ?>
                            
                        <?php endif; ?>
                        
                        
                       </div> 
                </div>
<?php get_footer(); ?>