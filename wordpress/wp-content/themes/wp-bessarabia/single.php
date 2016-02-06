  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="single-title inner-title"><?php the_title(); ?></h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-right-sidebar'); ?>>
      <?php if ( has_post_thumbnail()) :?>
        <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
      <?php endif; ?><!-- /post thumbnail -->

      <div class="article-precontent">
        <span class="cats"><?php the_category(', '); ?></span> <span class="tags"><?php the_tags('');?></span> <span class="date"><?php the_time('H:i'); ?>, <?php the_time('d F Y'); ?></span>
      </div>
      <!-- /.article-precontent -->
      <?php the_content(); ?>

    </article>
  <?php endwhile; else: ?>
    <article class="article-right-sidebar">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
