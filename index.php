<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package commongrounds
 */

get_header(); ?>
  <div class="container index">
    <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'news' ); ?>
      <?php endwhile; ?>
      <?php commongrounds_content_nav( 'nav-below' ); ?>
    <?php else : ?>
      <?php get_template_part( 'no-results', 'index' ); ?>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>
