<?php get_header(); ?>

<!-- <h2>Hi from index.php</h2> -->
<!-- <h2>index.php</h2> -->

<?php

  // $args = array(
  //   'post_type'       =>  'post',
  //   'posts_per_page'  =>  3
  // );

  // $blogposts = new WP_Query($args);

  while( $blogposts->have_posts() ) {
    // $blogposts->the_post();
    the_post();
?>

  <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
  </a>
  <?php the_excerpt(); ?>

<?php
  }
?>

<?php get_footer(); ?>
