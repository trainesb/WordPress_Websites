<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<!-- add in your own icons (start) -->
<link rel="shortcut icon" sizes="196x196" href="<?php bloginfo( 'template_directory' ); ?>/img/webicon.png">
<link rel="shortcut icon" sizes="128x128" href="<?php bloginfo( 'template_directory' ); ?>/img/webicon.png">
<link rel="apple-touch-icon" sizes="128x128" href="<?php bloginfo( 'template_directory' ); ?>/img/webicon.png">
<link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php bloginfo( 'template_directory' ); ?>/img/webicon.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<!-- add in your own icons (end) -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
      <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
</head>
<body ontouchstart="">
<!--[if lte IE 9]>
<p align="center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to use our website.</p>
<![endif]-->
<!-- topimg -->
  <div class="banner-area">
    <div class="container-fluid nopadding">
      <img class="topimg" src="/img/top.jpeg" alt="">
    </div>
  </div>


<!-- head -->

<div class="container">
<div class="row">
<div class="col-sm-3 head-icons">
  <i class="fa fa-phone-square circle-icon" aria-hidden="true"><a class="phonelink" href="tel:+1<?php the_field('phone', 'options' ); ?>"></a></i>
  <i class="fa fa-envelope circle-icon" aria-hidden="true"><a class="emaillink" href="mailto:<?php the_field('email', 'options' ); ?>"></a></i>
  <i class="fa fa-facebook-official circle-icon" aria-hidden="true"><a class="facebooklink" href="<?php the_field('facebook', 'options' ); ?>" target="_blank"></a></i>

    <h2 class="head-listings hidden-sm hidden-md hidden-lg hidden-xl">Listings</h2>
</div>

<div class="col-sm-6 head-title">
  <h1>KARLEE PHILP</h1>
  <p>&horbar; REALTOR &horbar;</p>
</div>
<div class="col-sm-3 head-listings hidden-xs">
  <h2>Listings</h2>
</div>
</div>
</div>

<!-- topnav -->
<nav id="topnav">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i> Menu</button></div>
            <div class="collapse navbar-collapse">
<?php wp_nav_menu( array( 'menu' => 'primary', 'theme_location' => 'primary', 'container' => 'ul', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!--topbanner -->
  <div id="topbanner">
  <div class="container">
    <div class="col-sm-12">
      <h1>REALITY FOR THE 21<sup>st</sup> CENTURY</h1>
    </div>
  </div>
  </div>
