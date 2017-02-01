<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>

    <?php
      $categories = get_categories( array(
          'orderby' => 'name',
          'parent'  => 0
      ));
        foreach ( $categories as $category ) {
          $catID = $category->term_id;
    ?>

      <?php query_posts("showposts=1&cat=".$catID); ?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php get_template_part('front-page-loop'); ?>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    <?php } ?>

  </div><!-- article-left-sidebar -->
<?php get_footer(); ?>


