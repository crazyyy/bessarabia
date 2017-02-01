<aside class="sidebar sidebar-right" role="complementary">

  <?php
    // for use in single.php (where $post is available)
    // start of the tax_query arguments
    $args = array( 'tax_query' => array( 'relation' => 'AND' ) );

    // get current post tags
    $tags = wp_get_object_terms( $post->ID, 'post_tag', array( 'fields' => 'ids' ) );

    if ( !empty( $tags ) ) {
      $args['tax_query'][] = array(
        'taxonomy' => 'post_tag',
        'posts_per_page' => '4',
        'field'    => 'id',
        'terms'    => $tags,
        'operator' => 'IN'
      );
    }

    // the query
    $related_query = new WP_Query( $args );
  ?>
    <div class="widget widget-cat-list widget-cat-list-orange">
      <h6>Новости региона</h6>
      <ul>
        <?php while ( $related_query->have_posts() ) { $related_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
        <?php } ?>
      </ul>
    </div><!-- /.widget widget-cat-list widget-cat-list-orange -->
  <?php wp_reset_postdata(); ?>
  <?php wp_reset_query(); ?>

  <?php
    // for use in single.php (where $post is available)
    // start of the tax_query arguments
    $args = array( 'tax_query' => array( 'relation' => 'AND' ) );
    // get current post categories
    $categories = wp_get_object_terms( $post->ID, 'category', array( 'fields' => 'ids' ) );
    if ( !empty( $categories ) ) {
      $args['tax_query'][] = array(
        'taxonomy' => 'category',
        'posts_per_page' => '4',
        'field'    => 'id',
        'terms'    => $categories,
      );
    }
    // the query
    $related_query = new WP_Query( $args );
  ?>
    <div class="widget widget-cat-list widget-cat-list-blue">
      <h6>Новости рубрики</h6>
      <ul>
        <?php while ( $related_query->have_posts() ) { $related_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
        <?php } ?>
      </ul>
    </div><!-- /.widget widget-cat-list widget-cat-list-blue -->

  <?php wp_reset_postdata(); ?>
  <?php wp_reset_query(); ?>

  <?php if ( is_active_sidebar('widgetarea2') ) : ?>
    <?php dynamic_sidebar( 'widgetarea2' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>
</aside><!-- /sidebar -->
