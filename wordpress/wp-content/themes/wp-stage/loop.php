<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('front-loop front-loop-cat looper'); ?>>

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
      <span class="date"><span><?php the_time('j F Y'); ?></span>
    </a>

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
