<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <![endif]-->
    <!-- css + javascript -->
    <?php wp_head(); ?>
	<style>
		.front-loop .cat.catid-kriminal {
			background-color: black;
		}
	</style>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="inner">

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

      <div class="zibrov">
      <a href="http://arciz.org" Интернет-магазин цифровой техники в Арцизе target="_blank">
	  <img src="http://arciz.org/ARCIZ.ORG.gif" alt="Купить компьютер в Арцизе" title="Интернет-магазин цифровой техники в Арцизе">
	  </a>
      </div><!-- /.zibrov -->

      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
        <ul class="socialnav">
          <li class="soc-ico-vk"><a href="https://vk.com/id351482207" title="Украинская Бессарабия в контакте" target="_blank"></a></li>
          <li class="soc-ico-od"><a href="http://ok.ru/profile/584913344311" title="Украинская Бессарабия в Одноклассниках" target="_blank"></a></li>
          <li class="soc-ico-fb"><a href="https://www.facebook.com/profile.php?id=100011347607243" title="Украинская Бессарабия в Facebook" target="_blank"></a></li>
          <li class="soc-ico-tw"><a href=""></a></li>
          <li class="soc-ico-gp"><a href=""></a></li>
        </ul><!-- socialnav -->
      </nav><!-- /nav -->

      <form method="get" class="header-search" name="searchform" action="<?php bloginfo('url'); ?>/">
        <input type="text" name="s" value="Поиск" onfocus="clearThis(this)" />
        <input type="submit" name="Поиск" value=""/>
      </form>

    </div><!-- /.inner -->
  </header><!-- /header -->

  <section role="main">
    <div class="inner">
