<?php get_header(); ?>

    <h1 class="single-title inner-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-right-sidebar'); ?>>
      <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
    </article>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>
