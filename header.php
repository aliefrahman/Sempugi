<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description')?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<!-- jQuery library (served from Google) -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     	<?php if (is_single()) {
			foreach((get_the_category()) as $category) {
			$keywords[] = strtolower($category->cat_name);
			}
			?>
        <meta name="keywords" content="<?php echo implode(", ", array_unique($keywords)); ?>" />
		<?php } ?>
		<?php
		if (is_singular()):
		global $post;
		setup_postdata($post);
		?>
		<meta name="description" content="<?php the_excerpt_rss(); ?>" />
		<?php endif; ?>

       <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    </head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <span class="glyphicon glyphicon-home"></span>
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
<br>
<div class="col-md-6 col-md-offset-3" align="center"><img src="<?php bloginfo('template_directory'); ?>/images/logosempugi2.png" width="200" class="img-responsive" /></div>
<div class="col-md-6 col-md-offset-3"><h2 class="text-center" style="color: #FFFFFF"><?php bloginfo('name'); ?></h2></div>
</div>