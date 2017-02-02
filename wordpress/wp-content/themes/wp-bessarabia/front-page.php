<?php /* Template Name: Home Page */ get_header(); ?>
  <?php get_sidebar('left'); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('article-left-sidebar'); ?>>

  <div class="home-slider">
    <ul class="bxslider">
      <?php query_posts("showposts=6"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a rel="nofollow"href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <h2 class="inner-title"><?php the_title(); ?></h2>
            </a>
          </li>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
    <div id="bx-pager">
      <?php query_posts("showposts=6"); ?>
        <?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a data-slide-index="<?php echo $i; ?>" href="">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('small');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a>
        <?php $i++; endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div><!-- /.home-slider -->

    <?php query_posts("showposts=1&cat=83"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=81"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=99"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=79"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=78"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=82"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=80"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    <?php query_posts("showposts=1&cat=1"); ?>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('front-page-loop'); ?>
      <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

  </div><!-- article-left-sidebar -->
<?php get_footer(); ?>


