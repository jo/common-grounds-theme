<?php
/**
 * @package commongrounds
 */
?>
<div class="news">
  <div class="row">
    <div class="col-md-6 hidden-xs col-sm-6">
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php the_post_thumbnail('medium');?>
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 entry">
      <header class="page-header">
        <h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <div class="entry-meta">
          <?php the_time(get_option('date_format')); ?>
        </div>
      </header>

      <?php the_excerpt(); ?>

      <p class="more"><a href="<?php the_permalink(); ?>" rel="bookmark">mehr</a></p>
    </div>
  </div>
</div>
