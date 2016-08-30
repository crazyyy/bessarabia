<aside class="sidebar sidebar-left" role="complementary">

  <div class="widget widget-last-news">
    <h6>НОВОСТИ</h6>
    <ul>
      <?php query_posts("showposts=8"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
          <span class="time"><?php the_time('j.m'); ?></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div><!-- /.widget widget-last-news -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>
</aside><!-- /sidebar -->
