<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS Custom Homes, LLC</title>
    
	<?php
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=886052748105900";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!--top sticky contact bar-->
	<div class="top-sticky-contact-nav" id="sticky-contact-nav">
		<div>
				<span><a href="tel:4056300888"><i class="fa fa-phone"></i> Call Us</a><span class="hidden-xs">(405)-630-0888</span></span><!--
--><span><a href="mailto:jared@jshomesok.com"><i class="fas fa-envelope"></i> Email Us</a><span class="hidden-xs">jared@jshomesok.com</span></span>
		</div>
	</div>


    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container-h">
	<div class="nav-row">
		<div class="logo-area-con">
			<!--Logo here -->
			<div class="nav-logo">
				<a href="<?php echo site_url(); ?>">
					<!--logo-->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/both-white.png">
				</a>
			</div>
		</div><!--
--><div class="table-cell-spacer"></div><!--
--><div class="btn-group dropdown header-menu">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrapcanvaswp' ); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<!-- /"Award" & Social Icons -->
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
				?><!--/.nav-collapse -->
			</div>
	</div><!--nav-row-->
      </div><!--container-h-->
    </nav>
    <div class="blog-header">