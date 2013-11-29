<?php
/**
 * @package commongrounds
 */
?>
<div class="col-xs-12 col-sm-6 project-list">
  <a href="<?php the_permalink(); ?>" rel="bookmark">
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail('medium');?>
  </a>
</div>
