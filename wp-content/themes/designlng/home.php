<?php
/*
Template Name: home
 */
?>

<?php get_header();?>

<main class="page-main">
  <div class="wrapper">
  <?php 
    if( have_posts()) {while (have_posts()){the_post();}}
  ?>
  <article class="post">
    <?php the_title();?>
  </article>
  </div>
</main>

<?php get_footer();?>