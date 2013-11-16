<?php
/**
 * The front page template file.
 *
 * This is the front page, where all posts with category name 'featured'
 * are displayed in a slider.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage common-grounds
 */

get_header(); ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php $posts = get_posts(array( 'post_type' => 'pp_slide', 'posts_per_page' => 100 )); ?> 
    <?php $count = 0 ?>
    <?php foreach ($posts as $post): ?>
      <?php $count++ ?>
      <div class="item <?php if($count == 1) echo 'active' ?>" style="background-image: url(<?php getSliderImage() ?>)">
        <div class="container">
          <div class="carousel-caption">
            <?php getSliderContent() ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <?php if($count > 1): ?>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>
