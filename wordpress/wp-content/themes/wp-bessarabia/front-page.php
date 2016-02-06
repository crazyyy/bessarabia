<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>

      <article id="post-<?php the_ID(); ?>" <?php post_class('front-loop looper'); ?>>
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <span class="cat"><?php the_category(', '); ?></span>
        </a><!-- /post thumbnail -->
        <h2 class="inner-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2><!-- /post title -->
        <span class="date"><span><?php the_time('G:i'); ?></span>, <?php the_time('j F Y'); ?></span>
      </article><!-- /looper -->

    </div><!-- article-left-sidebar -->
  <?php endwhile; else: // If 404 page error ?>
    <div class="article-left-sidebar">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </div>
  <?php endif; ?>
<?php get_footer(); ?>
