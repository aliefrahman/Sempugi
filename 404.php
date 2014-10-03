<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link 
to <?php the_title(); ?>"><?php the_title(); ?></a>
</h2>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<div class="commentblock">
<?php comments_template(); ?>
</div><!--commentblock-->
<?php endwhile; ?>
<div class="navigation">
<div class="alignleft"><?php posts_nav_link(); ?></div>
<div class="clear"><!-- --></div>
</div><!-- .navigation -->
<?php else: ?>
<h3>File Tidak Ada</h3>
<p>Artikel yang Anda cari tidak dapat ditemukan.</p>
<?php endif; ?>