<?php

// Hide admin help tab
function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'hide_help');
//

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

?>
