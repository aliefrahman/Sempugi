<?php get_header(); ?>
<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  captions: true,
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 400,
  slideMargin: 10
});
  });
</script>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-8"> 
<h3><span class="label label-default">Budaya</span></h3>
     
<ul class="bxslider">
  <li><img src="<?php bloginfo('template_directory'); ?>/images/1.png" title="<a href='http://sempugi.org/2014/10/01/kabar-duka-dari-tanah-luwu/'>Kabar Duka Dari Tanah Luwu</a>" /></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" /></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" /></li>
	  <li><img src="<?php bloginfo('template_directory'); ?>/images/1.png" title="Semangat" /></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" /></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" /></li>
</ul>

<div class="col-xs-12 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Sejarah</h3>
  </div>
  <div class="panel-body">
   <?php if (query_posts('cat=3&posts_per_page=3')) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="media">
  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="pull-left">
  	<?php if(has_post_thumbnail()) { ?>
   <?php the_post_thumbnail('customverysmall'); ?>
<?php	} else {
    echo "<img src='http://localhost/wordpress/wp-content/themes/sempugi/images/no-pic.png' width=50 />";
	} ?> </a>
		 <div class="media-body">
    		<h5 class="media-heading"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h5>
   			 <h6 class="text-warning"><?php _e('Posted In &#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?> | <?php the_time(__('j F Y', 'example')); ?> | <?php edit_post_link(__('Edit', 'example'), ' <span class="sep">|</span> <span class="edit">', '</span> '); ?></h6>		 
 		 </div>
</div>
   <hr>
       <?php endwhile; ?>
      <?php else : ?>
 
 
<?php /* Error 404 */ ?>
<?php $filename = TEMPLATEPATH . '/404.php'; if (file_exists($filename)) { include($filename); } ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
  </div>
</div>
</div>

<div class="col-xs-12 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Galigo</h3>
  </div>
  <div class="panel-body">
   <?php if (query_posts('cat=5&posts_per_page=3')) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="media">
  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="pull-left">
  	<?php if(has_post_thumbnail()) { ?>
   <?php the_post_thumbnail('customverysmall'); ?>
<?php	} else {
    echo "<img src='http://localhost/wordpress/wp-content/themes/sempugi/images/no-pic.png' width=50 />";
	} ?> </a>
		 <div class="media-body">
    		<h5 class="media-heading"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h5>
   			 <h6 class="text-warning"><?php _e('Posted In &#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?> | <?php the_time(__('j F Y', 'example')); ?> | <?php edit_post_link(__('Edit', 'example'), ' <span class="sep"></span> <span class="edit">', '</span> '); ?></h6>		 
 		 </div>
</div>
   <hr>
       <?php endwhile; ?>
      <?php else : ?>
 
 
<?php /* Error 404 */ ?>
<?php $filename = TEMPLATEPATH . '/404.php'; if (file_exists($filename)) { include($filename); } ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
  </div>
</div>
</div>

<div class="col-xs-12 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Kuliner</h3>
  </div>
  <div class="panel-body">
    File Tidak Ada
  </div>
</div>
</div>

<div class="col-xs-12 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Wisata</h3>
  </div>
  <div class="panel-body">
    File Tidak Ada
  </div>
</div>
</div>

</div><br>
<div class="col-xs-12 col-md-4">
	<?php get_sidebar( 'page' ); ?>
	<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Foto</h3>
  </div>
  <div class="panel-body">
    File Tidak Ada
  </div>
</div>
	<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Video</h3>
  </div>
  <div class="panel-body">
    File Tidak Ada
  </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>