<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 

require get_template_directory() . '/inc/extras.php';

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


function wp_bootstrap_main_nav() 
{
    // Display the WordPress menu if available
    wp_nav_menu( 
        array( 
		 
                'container'         => 'false',
                'menu_class'        => 'navbar-nav mr-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
        )
    );
}
//register Sidebar
if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'id'			=>	'sidebar-widget',
		'name'			=>	'Sidebar Utama',
		'description'	=>	'Sidebar Samping',
		'before_widget'	=>	'<div class="card border-primary mt-3">',
		'after_widget'	=>	'</div></div>',
		'before_title'	=>	'<div class="card-header text-primary">',
		'after_title'	=>	'</div><div class="card-body text-primary">',
	));
}

// Function page Navigation
require ('inc/wp_bootstrap_pagination.php');
 
	//function call partial
function get_Slider(){
	require_once get_template_directory() . '/template-parts/slider.php';
}

function get_Features(){
	require_once get_template_directory() . '/template-parts/features.php';
}
function get_About(){
	require_once get_template_directory() . '/template-parts/about.php';
}
function get_Qoutes(){
	require_once get_template_directory() . '/template-parts/qoutes.php';
}
function get_visiMisi(){
	require_once get_template_directory() . '/template-parts/visi-misi.php';
}
function get_Donasi(){
	require_once get_template_directory() . '/template-parts/donasi.php';
}


//Count Reading Time
function estimated_reading_time( $content = '', $wpm = 300 ) {
	$clean_content = strip_shortcodes( $content );
	$clean_content = strip_tags( $clean_content );
	$word_count = str_word_count( $clean_content );
	$time = ceil( $word_count / $wpm );
	return $time;
}

// Function add class to comments
require ('inc/wp_comment_walker.php');
function add_class_reply($link, $args, $comment, $post){
	return str_replace("class='comment-reply-link'", "class='comment-reply-link btn btn-outline-primary btn-sm'", $link);
}
add_filter('comment_reply_link', 'add_class_reply', 420, 4);
