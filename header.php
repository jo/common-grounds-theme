<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package commongrounds
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/includes/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/includes/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	  <?php do_action( 'before' ); ?>

    <header class="navbar navbar-top navbar-default navbar-center" role="navigation">
      <div class="container">
        <h1 class="logo text-center hidden-xs">
          <a href="<?php echo esc_url(home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/common-grounds.svg" alt="common grounds"/></a>
        </h1>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="<?php echo esc_url(home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/common-grounds.svg" alt="common grounds"/></a>
        </div>
        <div class="collapse navbar-collapse">
           <?php wp_nav_menu(
                  array(
                      'theme_location' => 'left',
                      'container' => false,
                      'menu_class' => 'nav navbar-nav navbar-left',
                      'fallback_cb' => '',
                      'menu_id' => 'main-menu',
                      'walker' => new wp_bootstrap_navwalker()
                  )
              ); ?>
           <?php wp_nav_menu(
                  array(
                      'theme_location' => 'center',
                      'container' => false,
                      'menu_class' => 'nav navbar-nav',
                      'fallback_cb' => '',
                      'menu_id' => 'main-menu',
                      'walker' => new wp_bootstrap_navwalker()
                  )
              ); ?>
           <?php wp_nav_menu(
                  array(
                      'theme_location' => 'right',
                      'container' => false,
                      'menu_class' => 'nav navbar-nav navbar-right',
                      'fallback_cb' => '',
                      'menu_id' => 'main-menu',
                      'walker' => new wp_bootstrap_navwalker()
                  )
              ); ?>
        </div>
      </div>
    </header>
