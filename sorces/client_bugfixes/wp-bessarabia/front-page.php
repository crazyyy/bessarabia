<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>

    <?php query_posts("showposts=1&cat=1"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=81"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=78"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=79"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=82"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=83"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=80"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

  </div><!-- article-left-sidebar -->
<?php get_footer(); ?>


