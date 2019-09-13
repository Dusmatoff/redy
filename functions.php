<?php
/**
 * redy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package redy
 */

if ( ! function_exists( 'redy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function redy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on redy, use a find and replace
		 * to change 'redy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'redy', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'redy' ),
            'footer-menu-1' => esc_html__( 'General stuff', 'redy' ),
            'footer-menu-2' => esc_html__( 'Legal stuff', 'redy' )
		) );
	}
endif;
add_action( 'after_setup_theme', 'redy_setup' );

/**
 * Enqueue scripts and styles.
 */
function redy_scripts() {
    wp_enqueue_style('redy-main-style', get_template_directory_uri() . '/css/main.css');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', '', false);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.jquery.min.js', '', '', true );
    wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', '', '', true );
    wp_enqueue_script( 'select2', get_template_directory_uri() . '/js/select2.min.js', '', '', true );
    wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/smoothscroll.js', '', '', true );
    wp_enqueue_script( 'add', get_template_directory_uri() . '/js/add.js', '', '', true );
    if(is_page_template('page-real-talk.php') ){
        wp_enqueue_script( 'izotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', '', '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'redy_scripts' );

//Enqueue styles in footer
function redy_get_footer(){
    wp_enqueue_style('redy-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('redy-add-style', get_stylesheet_uri());
}
add_action('get_footer','redy_get_footer');

//Disable Gutenberg
add_filter( 'use_block_editor_for_post', '__return_false' );

/* Theme Options */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}

//SVG support
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/* Add classes to body */
add_filter( 'body_class','redy_class_names' );
function redy_class_names( $classes ) {
	if( is_front_page() ){
	    $classes[] = 'homepage';
	}
	
	if( is_page_template('page-about.php') || is_page_template('page-real-talk.php') || is_page_template('page-gives-back.php') || is_page_template('page.php') || is_single() ){
	    $classes[] = 'bg-pink about-page';
	}
	
	if( is_page_template('page-contact.php') ){
	    $classes[] = 'step-page in-touch';
	}
		

	return $classes;
}
