<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="single-title inner-title"><?php the_title(); ?></h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-right-sidebar'); ?>>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
