<?php 
//styles
function enqueue_styles(){  
    wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css', null, false);
    wp_enqueue_style('media_1', get_template_directory_uri() .'/css/media_1.css', null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
//scripts
function enqueue_script(){
    wp_deregister_script('jquery');
    wp_enqueue_script('libs', get_template_directory_uri() .'/js/libs.min.js', null, true);
    wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('libs'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_script');
//header_menu
register_nav_menu('Main', 'Маленькое меню в хедере и футере');
//foter
register_nav_menu('Service list', 'Список услуг');
register_nav_menu('Service list footer', 'Список услуг футер');

//add thumbnails
add_theme_support( 'post-thumbnails' );
//add support excerpt
add_post_type_support( 'page', 'excerpt' );

require_once ('parts/admin/helpers.php');
require_once ('parts/admin/post_types.php');
require_once ('parts/emails/service.php');
require_once ('parts/admin/ajax.php');
require_once ('parts/admin/shortcodes.php');
?>