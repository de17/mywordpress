<?php


function js_css() {
wp_enqueue_style('custom-style', get_stylesheet_directory_uri() .'/assests/css/custom.css', false);
wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() .'/assests/css/bootstrap.min.css', false);
wp_enqueue_style('aos-style', get_stylesheet_directory_uri() .'/assests/css/aos.min.css', false);
wp_enqueue_style('owl-style', get_stylesheet_directory_uri() .'/assests/css/owl.carousel.min.css', false);

wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() .'/assests/js/jquery.min.js', false);
wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() .'/assests/js/bootstrap.min.js', false);
wp_enqueue_script('aos-js', get_stylesheet_directory_uri() .'/assests/js/aos.min.js', false);
wp_enqueue_script('owl-js', get_stylesheet_directory_uri() .'/assests/js/owl.carousel.min.js', false);
wp_enqueue_script('custom-js', get_stylesheet_directory_uri() .'/assests/js/custom.min.js', false);

}
add_action('wp_enqueue_scripts', 'js_css' , 10);


function register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu',
        )
    ); 
}
add_action( 'init', 'register_menus' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
function insight_posttype() {
  
    register_post_type( 'insights',
        array(
            'labels' => array(
                'name' => __( 'Insights' ),
                'singular_name' => __( 'Insight' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'insights'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'insight_posttype' );

function add_tags_categories() {
register_taxonomy_for_object_type('category', 'insights');
register_taxonomy_for_object_type('post_tag', 'insights');
}
add_action('init', 'add_tags_categories');

add_theme_support('post-thumbnails');
    add_post_type_support( 'insights', 'thumbnail' );
