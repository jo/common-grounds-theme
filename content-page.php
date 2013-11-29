<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package commongrounds
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page">
	<div class="entry-content page-content">
		<?php the_content(); ?>
	</div>
</article>
