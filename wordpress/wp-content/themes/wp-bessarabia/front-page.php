<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis minus sed, expedita quos eius assumenda ullam qui delectus ducimus dolore minima blanditiis possimus impedit sint repellat nisi nihil autem neque!
  <div class="home-slider">
    <ul class="bxslider">



      <?php query_posts("showposts=6"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      <li><img src="http://buyersguide.caranddriver.com/media/assets/submodel/7482.jpg" /></li>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

    </ul>

    <div id="bx-pager">
      <?php query_posts("showposts=6"); ?>
<?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <a data-slide-index="<?php echo $i; ?>" href=""><img src="http://buyersguide.caranddriver.com/media/assets/submodel/7482.jpg" /></a>
<?php $i++; endwhile; endif; ?>
<?php wp_reset_query(); ?>

    </div>
  </div><!-- /.home-slider -->

    <?php
      $categories = get_categories( array(
          'orderby' => 'name',
          'parent'  => 0
      ));
        foreach ( $categories as $category ) {
          $catID = $category->term_id;
    ?>

      <?php query_posts("showposts=1&cat=".$catID); ?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php get_template_part('front-page-loop'); ?>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    <?php } ?>

  </div><!-- article-left-sidebar -->
<?php get_footer(); ?>


