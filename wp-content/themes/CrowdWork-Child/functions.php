<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
   p {
     
      font-size: inherit;
    } 
  </style>';
}

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
   p {
     
      font-size: inherit;
    } 
  </style>';
}
 add_filter( 'woocommerce_customer_meta_fields', 'xbs_remove_shipping_fields' );
function xbs_remove_shipping_fields( $show_fields ) {
    unset( $show_fields['shipping'] );
    return $show_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
     unset($fields['order']['billing_address_2']);     
     unset($fields['order']['shipping_address_2']);

     return $fields;
}
function custom_remove_checkout_fields($fields) {
    unset($fields['order']['billing_address_2']);     
    unset($fields['order']['shipping_address_2']);
    return $fields;
}
// Admin footer modification

function remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by <a href="https://www.crowdwork.io" target="_blank">CrowdWork Co-op</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'my_footer_shh' );

//check if role exist before removing it
if( get_role('subscriber') ){
      remove_role( 'subscriber' );
}

// remove links/menus from the admin bar
function mytheme_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('updates');
  $wp_admin_bar->remove_menu('notifications');
  $wp_admin_bar->remove_menu('admin_bar_purge_cache');


}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('ACF Settings');
  acf_add_options_page('ACF Settings');

}

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('File Transfer');
  acf_add_options_page('File Transfer');

} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Resources');
  acf_add_options_page('Resources');

} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Tutorials');
  acf_add_options_page('Tutorials');
 
} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Projects');
  acf_add_options_page('Projects');
 
} 

// Admin footer modification

function remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by <a href="https://www.crowdwork.io" target="_blank">CrowdWork Co-op</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'my_footer_shh' );

//check if role exist before removing it
if( get_role('subscriber') ){
      remove_role( 'subscriber' );
}

// remove links/menus from the admin bar
function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('notifications');
	$wp_admin_bar->remove_menu('admin_bar_purge_cache');


}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('ACF Settings');
  acf_add_options_page('ACF Settings');

}

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('File Transfer');
  acf_add_options_page('File Transfer');

} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Resources');
  acf_add_options_page('Resources');

} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Tutorials');
  acf_add_options_page('Tutorials');
 
} 

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Projects');
  acf_add_options_page('Projects');
 
} 