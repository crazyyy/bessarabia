<?php get_header(); ?>
  <?php get_sidebar('left'); ?>

  <div id="post-<?php the_ID(); ?>" class="article-left-sidebar">
    <h1 class="cat-title inner-title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </div><!-- article-left-sidebar -->

<?php get_footer(); ?>
