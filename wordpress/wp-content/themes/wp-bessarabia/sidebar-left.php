<aside class="sidebar sidebar-left" role="complementary">

  <?php /* query_posts("showposts=15"); */ ?>

  <?php
  /*
    $today = date('Y-m-d');
    $i = 0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
      <?php
        $postdate = get_the_date('Y-m-d');
        if ( $today == $postdate ) {
          $i++;
        }
      ?>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>


  <?php if ( $i > 0 ) {

  */

/*
 ?>

    <div class="widget widget-last-news">
      <h6>Последние НОВОСТИ</h6>
      <ul>
        <?php query_posts("showposts=20"); ?>
          <?php
            $today = date('Y-m-d');
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>

            <?php
            $posttime = get_the_time('H:i');
            /*
              $postdate = get_the_date('Y-m-d');
              if ( $today == $postdate ) {
                $posttime = get_the_time('H:i');
*/
                /*
                ?>

                  <li>
                    <span class="time"><?php echo $posttime; ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>

            <?php

            */
            /*
            }
            */
           /*
            ?>

          <?php endwhile; endif; ?>
        <?php wp_reset_query();

        ?>
      </ul>
    </div><!-- /.widget widget-last-news -->

  <?php
  /* }
  */?>

  <?php /* ?>
  <div class="widget widget-last-news">
    <h6>ВСЕ НОВОСТИ</h6>
    <ul>
      <?php query_posts("showposts=15"); ?>
        <?php
          $today = date('Y-m-d');
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

          <?php
            $postdate = get_the_date('Y-m-d');
            if ( $today == $postdate ) {
              // nothing
            } else {
              $posttime =  get_the_date('d.m');
          ?>

            <li>
              <span class="time"><?php echo $posttime; ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>

          <?php } ?>

        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div><!-- /.widget widget-last-news -->
  <?php */ ?>




    <div class="widget widget-last-news">
      <h6>Последние НОВОСТИ</h6>
      <ul>

        <?php $args = array(
            // 'cat' => '8',
            'post_type' => 'post',
            'posts_per_page' => 20,
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
            );
          query_posts($args);
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php
            $today = date('Y-m-d');
            $postdate = get_the_date('Y-m-d');
            $posttime = '<span class="time">'.get_the_date('H:i').'</span>';
            if ( $today == $postdate ) {
              $post_heading_date = '';
              $postclass = 'post-today';
            } else {
              if ($tempdate === get_the_date('d F')) {
                $post_heading_date = '';
                $tempdate = get_the_date('d F');
                $postclass = 'post-other';
              } else {
                $post_heading_date = '<span class="postdate">'.get_the_date('d F').'</span>';
                $tempdate = get_the_date('d F');
                $postclass = 'post-first';
              }
            }
          ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class($postclass); ?>>
            <?php echo $post_heading_date; ?>
            <?php echo $posttime; ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>

        <?php endwhile; endif; ?>

        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
          <script>
          var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
          var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
          var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
          var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
          </script>
          <div id="true_loadmore">Загрузить ещё</div>
        <?php endif; ?>

        <?php wp_reset_query(); ?>

      </ul>
    </div><!-- /.widget widget-last-news -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>
</aside><!-- /sidebar -->
