<?php get_header(); ?>
<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
<?php if(is_category( 'Featured' )) : ?>
	<h2 class="archive-title">Fitur Artikel:</h2>
<?php  else: ?>
	<h2 class="archive-title">Arsip Kategori: <?php single_cat_title(); ?> </h2>
<?php endif; ?>
<?php
$catid = get_query_var('cat');
?>

<ul class="subcategories">
<?php $cats = get_categories('order=desc&title_li=&child_of='.$catid);
foreach ($cats as $cat) { ?>
<li>
<h4><a href="<?php echo get_category_link( $cat->cat_ID ); ?>" rel="bookmark"
title="<?php echo $cat->cat_name; ?>"><?php echo $cat->cat_name; ?></a></h4>
</li>
<?php } ?>
</ul>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (in_category($catid) ) : ?>
<h3 <?php post_class(); ?>><a href="<?php the_permalink() ?>" rel="bookmark"
title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
<?php endif; endwhile; ?>
<?php endif;?>
</div>
<div class="col-xs-12 col-md-4"><?php get_sidebar( 'primary' ); ?></div>

	</div>
</div>
	
<?php get_footer(); ?>