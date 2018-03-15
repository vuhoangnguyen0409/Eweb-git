<?php
//css
function add_style_css() {
	wp_register_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' ); //cdn
	wp_enqueue_style( 'wpb-fa' );
	wp_register_style( 'hover', 'https://cdn.bootcss.com/hover.css/2.1.1/css/hover-min.css' ); //cdn
	wp_enqueue_style( 'hover' );
	wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css' ); //inside page
	wp_enqueue_style( 'reset' );
	wp_register_style( 'common1', get_template_directory_uri() . '/css/common.css' ); //inside page
	wp_enqueue_style( 'common1' );
	wp_register_style( 'meanmenu', get_template_directory_uri() . '/js/meanmenu/meanmenu.css' ); //inside page
	wp_enqueue_style( 'meanmenu' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' ); //inside page
	wp_enqueue_style( 'style' );
	wp_register_style( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox-1.3.4.css' ); //inside page
	wp_enqueue_style( 'fancybox' );
	wp_register_style( 'content', get_template_directory_uri() . '/css/content.css' ); //inside page
	wp_enqueue_style( 'content' );
	if ( is_page( 'home' ) ) {
		wp_register_style( 'homecss', get_template_directory_uri() . '/css/home.css' ); //inside page
		wp_enqueue_style( 'homecss' );
	}
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' ); //inside page
	wp_enqueue_style( 'responsive' );
}
add_action( 'wp_enqueue_scripts', 'add_style_css' );
//js
function add_style_js() {
	wp_register_script( 'jquery01', get_template_directory_uri() . '/js/jquery-1.8.3.min.js', 'jquery', TRUE );
	wp_enqueue_script( 'jquery01' );
	wp_register_script( 'meanmenu', get_template_directory_uri() . '/js/meanmenu/jquery.meanmenu.min.js', 'jquery', TRUE );
	wp_enqueue_script( 'meanmenu' );
	wp_register_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', 'jquery', TRUE );
	wp_enqueue_script( 'matchHeight' );
	wp_register_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox-1.3.4.pack.js', 'jquery', TRUE );
	wp_enqueue_script( 'fancybox' );
	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', 'jquery', TRUE );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'add_style_js' );
// Init 
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
//feature img
add_theme_support( 'post-thumbnails' );
add_theme_support( 'category-thumbnails' );
add_theme_support( 'html5' );
//hide admin bar
show_admin_bar( false );
//css wp admin
function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}

add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
//logo admin
function login_logo() {
	echo '<style type="text/css">
    .login h1 a {
          background-image: url(' . get_template_directory_uri() . '/img/common/logo.png);
          background-size:100% 100%;
          height: 82px;
          width: 159px;
        }
    </style>';
}
add_action( 'login_head', 'login_logo' );
/************ Theme Options************/
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	) );

	acf_add_options_sub_page( array(
		'page_title' => 'Theme Header Settings',
		'menu_title' => 'Header',
		'parent_slug' => 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title' => 'Theme Footer Settings',
		'menu_title' => 'Footer',
		'parent_slug' => 'theme-general-settings',
	) );

}
register_nav_menus(
	array(
		'main-nav' => 'main-nav-location',
	)
);
add_filter( 'menu_image_default_sizes', function($sizes){
 
  // remove the default 36x36 size
  unset($sizes['menu-36x36']);
 
  // add a new size
  $sizes['menu-50x50'] = array(50,50);
 
  // return $sizes (required)
  return $sizes;
 
});
//Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) { 
 function wpex_pagination() {  
 global $wp_query;
 //$prev_arrow = is_rtl() ? '<img style="display: none;" height="20px" src="'.get_template_directory_uri().'/img/common/back.gif" alt="back" />' : '<img style="display: none;" height="20px" src="'.get_template_directory_uri().'/images/back.png" alt="back" />';
 //$next_arrow = is_rtl() ? '<img style="display: none;" height="20px" src="'.get_template_directory_uri().'/img/common/next.gif" alt="next" />' : '<img style="display: none;" height="20px" src="'.get_template_directory_uri().'/images/next.png" alt="next" />';
$big = 999999999; // need an unlikely integer
$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
  //'prev_text'  => $prev_arrow,
  //'next_text'  =>$next_arrow 
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ol class="pager clearfix">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ol>';
        }
 }
}
function wpb_sender_email( $original_email_address ) {
    return 'tim.smith@example.com';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Tim Smith';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );



?>