<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>

      <?php query_posts("showposts=10"); ?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('front-loop looper'); ?>>
              <a rel="nofollow"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
                <?php
                  $category = get_the_category();
                  if ($category) {
                    echo '<span class="cat catid-'. $category[0]->slug .'">' . $category[0]->name .'</span> ';
                  }
                ?>
                <h2 class="inner-title"><?php the_title(); ?></h2><!-- /post title -->
                <span class="date"><span><?php the_time('G:i'); ?></span>, <?php the_time('j F Y'); ?></span>
              </a>
            </article><!-- /looper -->

        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- article-left-sidebar -->
<?php get_footer(); ?>
