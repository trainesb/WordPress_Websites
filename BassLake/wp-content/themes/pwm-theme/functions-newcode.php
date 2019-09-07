<?php

require_once('custom-functions.php'); // don't delete
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary', 'custom' ),
) );


    if(function_exists('acf_add_options_page')) {
       $page = acf_add_options_page(array(
        'page_title'   => 'Options',
        'menu_title'   => 'Options',
        'menu_slug'   => 'acf-options',
        'capability'   => 'edit_posts',
        'position' => 21
      ));
      $page2 = acf_add_options_page(array(
        'page_title'   => 'General',
        'parent_slug' => 'acf-options',
        'menu_title'   => 'General',
        'menu_slug'   => 'general-options',
        'capability'   => 'edit_posts'
      ));
    }


// Enqueue Scripts and Styles
function my_assets() {

// Road Map Files
wp_register_style( 'roadmap-style', get_template_directory_uri() . '/roadmap/roadmap.css');
//

wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic|Roboto Slab:400,700,300|Raleway|Passion+One|Pavanam' );
wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-latest.min.js', array('jquery'), '', true);
wp_enqueue_script( 'modernizr', '//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js', '', '', false);
wp_enqueue_script( 'bootstrap', '//cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js', '', '', true);
wp_enqueue_script( 'cycle2', get_template_directory_uri().'/js/jquery.cycle2.js', '', '', true);
wp_register_script( 'gridalicious', get_template_directory_uri().'/js/jquery.grid-a-licious.min.js', array('jquery'), '', true);
wp_register_script( 'equalheight', get_template_directory_uri().'/js/grids.min.js', '', '', true);
wp_register_script( 'equalheight2', get_template_directory_uri().'/js/height.js', '', '', true);
wp_enqueue_script( 'sticky-nav', get_template_directory_uri().'/js/jquery.sticky-kit.min.js', '', '', true);
wp_enqueue_script( 'peek', get_template_directory_uri().'/js/parallaxfixedbg.js', '', '', true);
wp_register_script( 'scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '', true);

// Road Map Files
if ( is_page_template('template-roadmap.php') || is_page_template('template-contenthierarchy.php') || is_page_template('template-graphicconcept.php') ) {
wp_enqueue_style('roadmap-style');
wp_dequeue_style('my-style');
}
//

}
add_action('wp_enqueue_scripts', 'my_assets');

?>
