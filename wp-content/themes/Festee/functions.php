<?php
function festee_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('font-awesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js'); 
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js');
    // wp_enqueue_script('bootstrap-esm', get_template_directory_uri() . '/assets/js/bootstrap.esm.min.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js'); 
    
}
add_action('wp_enqueue_scripts', 'festee_enqueue_styles');


function festee_customizer_settings($wp_customize)
{
    $wp_customize->add_section('festee_options', array(
        'title'    => __('Theme Options', 'Festee'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header_text', array(
        'default'   => 'Welcome to Festee',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_text_control', array(
        'label'    => __('Header Text', 'Festee'),
        'section'  => 'festee_options',
        'settings' => 'header_text',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'festee_customizer_settings');


add_theme_support('wp-block-styles');
add_theme_support('align-wide');


function festee_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'festee_custom_logo_setup');


function allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');


function festee_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
        'footer' => __('Footer Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'festee_register_menus');
