<aside class="sidebar sidebar-left" role="complementary">

  <?php query_posts("showposts=15"); ?>

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

  */ ?>

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
                ?>

                  <li>
                    <span class="time"><?php echo $posttime; ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>

            <?php
            /*
            }
            */
            ?>

          <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
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

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>
</aside><!-- /sidebar -->
