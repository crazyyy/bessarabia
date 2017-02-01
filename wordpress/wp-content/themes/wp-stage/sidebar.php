<aside class="sidebar sidebar-right" role="complementary">

  <div class="widget widget-cat-list widget-cat-list-orange">
    <h6>Новости региона</h6>
    <ul>
      <?php query_posts("showposts=4&cat=1"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div><!-- /.widget widget-cat-list widget-cat-list-orange -->

  <div class="widget widget-cat-list widget-cat-list-blue">
    <h6>Новости рубрики</h6>
    <ul>
      <?php query_posts("showposts=4&cat=9"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div><!-- /.widget widget-cat-list widget-cat-list-blue -->

  <?php if ( is_active_sidebar('widgetarea2') ) : ?>
    <?php dynamic_sidebar( 'widgetarea2' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>
</aside><!-- /sidebar -->
