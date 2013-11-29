<?php
/**
 * @package commongrounds
 */
?>

<div class="container post">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
      <h1 class="page-title"><?php the_title(); ?></h1>

     <!--
      <div class="entry-meta">
        <?php the_time(get_option('date_format')); ?>
      </div>
      -->
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
</div>
