<?php

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

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// resize on upload to the largest size in media setting
function replace_uploaded_image($image_data) {

// if there is no large image : return
if (!isset($image_data['sizes']['large'])) return $image_data;

// path to the uploaded image and the large image
$upload_dir = wp_upload_dir();
$uploaded_image_location = $upload_dir['basedir'] . '/' .$image_data['file'];
$large_image_location = $upload_dir['path'] . '/'.$image_data['sizes']['large']['file'];

// delete the uploaded image
unlink($uploaded_image_location);

// rename the large image
rename($large_image_location,$uploaded_image_location);

// update image metadata and return them
$image_data['width'] = $image_data['sizes']['large']['width'];
$image_data['height'] = $image_data['sizes']['large']['height'];
unset($image_data['sizes']['large']);
return $image_data;
}

add_filter('wp_generate_attachment_metadata','replace_uploaded_image');

// Change the footer
function modify_footer_admin () { echo 'Created by <a href="http://www.prowebmarketing.com" target="_blank">Pro Web Marketing</a>. '; echo 'Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>.'; } add_filter('admin_footer_text', 'modify_footer_admin');

// Hide the WordPress Logo
function my_custom_login_logo() { echo '<style type="text/css">h1{display:none;}</style>'; }
add_action('login_head', 'my_custom_login_logo');

// Change the WordPress Logo URL
function my_login_logo_url() { return get_bloginfo( 'url' ); }
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Change the Powered by: WordPress to your Own Title
function my_login_logo_url_title() { return 'WP Admin'; }
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function annointed_admin_bar_remove() { global $wp_admin_bar; $wp_admin_bar->remove_menu('wp-logo'); }
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// Enqueue Scripts and Styles
function my_assets() {


// Road Map Files
wp_register_style( 'roadmap-style', get_template_directory_uri() . '/roadmap/roadmap.css');
//

wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic|Roboto Slab:400,700,300|Raleway' );
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