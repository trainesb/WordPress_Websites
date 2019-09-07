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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<!-- top backgroud img, logo, email, phone, title -->
<div class="header-wrapper">
<div class="container">
<header class="topcontent">
<div class="col-sm-4 header-icons hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x fa-inverse"></i></span><br><a href="tel:+1<?php the_field('phone', 'options' ); ?>"><?php the_field('phone', 'options' ); ?></a></div>
<div class="col-sm-4 header-icons hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span><br><a href="mailto:<?php the_field('email', 'options' ); ?>"><?php the_field('email', 'options' ); ?></a></div>
<div class="col-sm-4 header-icons hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span><br><a href="<?php the_field('facebook_link', 'options' ); ?>" target="_blank">Follow us on Facebook</a></div>

<div class="col-xs-12 header-icons-mobile hidden-sm hidden-md hidden-lg"><a href="tel:+1<?php the_field('phone', 'options' ); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x fa-inverse"></i></span></a>
<a href="mailto:<?php the_field('email', 'options' ); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></a>
<a href="<?php the_field('facebook_link', 'options' ); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></div>
<div>&nbsp;</div>

<div class="toplogo col-sm-12"><a href="/"><img class="centered" src="http://bll.prowebtesting.com/wp-content/uploads/Logo.png" alt=""></a></div>

</header>
<h1>WELCOME TO THE BASS LAKE LODGE</h1>
</div></div>




<!-- topnav -->

<nav id="topnav" class="nonstiky">
<div class="container">
<div id="row">
<div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<i class="fa fa-bars"></i> Menu
          </button>
        </div>
        <div class="collapse navbar-collapse">
		<?php wp_nav_menu( array( 'menu' => 'primary', 'theme_location' => 'primary', 'container' => 'ul', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
        </div><!--/.nav-collapse -->
      </div>
</div>
</div></nav>

<!-- Content Wrapper opening DIV -->
<div class="content-wrapper" style="background-image: url(<?php the_field('background_img', 'options' ); ?>);">
