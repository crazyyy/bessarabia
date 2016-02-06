<?php get_header(); ?>
  <?php get_sidebar('left'); ?>

  <div id="post-<?php the_ID(); ?>" class="article-left-sidebar">
    <h1 class="cat-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </div><!-- article-left-sidebar -->

<?php get_footer(); ?>
