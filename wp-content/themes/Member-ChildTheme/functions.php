<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'generate-style','generate-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );



// END ENQUEUE PARENT ACTION

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page('Resource-Repeater');

}

function ac_custom_column_settings_8dc7557a() {

    ac_register_columns( 'projects', array(
        array(
            'columns' => array(
                '5c8075780057d' => array(
                    'type' => 'column-featured_image',
                    'label' => 'Featured Image',
                    'width' => '',
                    'width_unit' => '%',
                    'featured_image_display' => 'image',
                    'image_size' => 'thumbnail',
                    'image_size_w' => '60',
                    'image_size_h' => '60',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c8075780057d',
                    'label_type' => '',
                    'search' => ''
                ),
                'title' => array(
                    'type' => 'title',
                    'label' => 'Title',
                    'width' => '200',
                    'width_unit' => 'px',
                    'edit' => 'on',
                    'sort' => 'on',
                    'name' => 'title',
                    'label_type' => '',
                    'search' => ''
                ),
                '5c807fc3d2aa1' => array(
                    'type' => 'column-acf_field',
                    'label' => 'Bid Status',
                    'width' => '',
                    'width_unit' => '%',
                    'field' => 'field_5c8077b37a2aa',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c807fc3d2aa1',
                    'label_type' => '',
                    'search' => ''
                ),
                '5c807dc9814dc' => array(
                    'type' => 'column-acf_field',
                    'label' => 'Product / Service Type',
                    'width' => '',
                    'width_unit' => '%',
                    'field' => 'field_5c8050d1402cc',
                    'post_property_display' => 'title',
                    'post_link_to' => '',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c807dc9814dc',
                    'label_type' => '',
                    'search' => ''
                ),
                'tags' => array(
                    'type' => 'tags',
                    'label' => 'Tags',
                    'width' => '150',
                    'width_unit' => 'px',
                    'edit' => 'on',
                    'enable_term_creation' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => 'tags',
                    'label_type' => '',
                    'search' => ''
                ),
                '5c7f51991a395' => array(
                    'type' => 'column-meta',
                    'label' => 'Customer',
                    'width' => '',
                    'width_unit' => '%',
                    'field' => 'customer',
                    'field_type' => 'user_by_id',
                    'display_author_as' => 'display_name',
                    'user_link_to' => '',
                    'before' => '',
                    'after' => '',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c7f51991a395',
                    'label_type' => '',
                    'search' => ''
                ),
                '5c8eb968a3a93' => array(
                    'type' => 'column-content',
                    'label' => 'Content',
                    'width' => '',
                    'width_unit' => '%',
                    'string_limit' => 'word_limit',
                    'excerpt_length' => '20',
                    'before' => '',
                    'after' => '',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c8eb968a3a93',
                    'label_type' => '',
                    'search' => ''
                ),
                '5c8ee1d9b05c8' => array(
                    'type' => 'column-acf_field',
                    'label' => 'Current Website',
                    'width' => '',
                    'width_unit' => '%',
                    'field' => 'field_5c8061c8d17d9',
                    'edit' => 'on',
                    'sort' => 'on',
                    'filter' => 'off',
                    'filter_label' => '',
                    'name' => '5c8ee1d9b05c8',
                    'label_type' => '',
                    'search' => ''
                )
            ),
            'layout' => array(
                'id' => false,
                'name' => 'Main Menu',
                'roles' => array( 'administrator',
            'member' ),
                'users' => false,
                'read_only' => false
            )
            
        )
    ) );
}
add_action( 'ac/ready', 'ac_custom_column_settings_8dc7557a' );
 


wp_enqueue_style(
    'my-styles',
    get_template_directory_uri() . '/mystyles.css',
    array('plugin-style-handle')
);
function my_login_logo() { ?>
    <style type="text/css">
       #login h1 a, .login h1 a {

    background-image: url(/wp-content/themes/Member-ChildTheme/images/logo.png) !important;
    width: 220px;
    background-size: 270px;
    background-repeat: no-repeat;
    padding-bottom: 120px;

}
body.login {
 background-size: 100%;
 background-attachment: fixed;
 background-color: white;
}


    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

 
