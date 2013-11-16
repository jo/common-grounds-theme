<?php
/**
 * common ground slides
 */

function getSliderImage() {
  $id = get_the_ID();
  $attachment_id = get_post_thumbnail_id($id);
  if ($attachment_id) {
    $image_attributes = wp_get_attachment_image_src( $attachment_id, 'large');
    if ($image_attributes && $image_attributes[0]) {
      echo $image_attributes[0];
    }
  }
}
function getSliderContent() {
  $my_postid = get_the_ID();
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  echo $content;
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'pp_slide',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', ),
    'capability_type'     => 'page',
    )
  );
}

