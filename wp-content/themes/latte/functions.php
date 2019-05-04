<?php
/*
 * Hey,
 * Only edit this file if you know what you're doing or make a backup before editing it.
 * Happy Blogging!
*/

require_once( trailingslashit( get_template_directory() ) . "/inc/customizer/customizer.php" );
require_once( trailingslashit( get_template_directory() ) . "/inc/customizer/custom-css.php" );
require_once( trailingslashit( get_template_directory() ) . "/inc/widgets/latte-services.php" );
require_once( trailingslashit( get_template_directory() ) . "/inc/widgets/latte-skills.php" );
require_once( trailingslashit( get_template_directory() ) . "/inc/other/post-formats.php" );

function latte_setup() {
	// Using this feature you can set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.  https://codex.wordpress.org/Content_Width
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 796;
	}

	// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
	add_theme_support('title-tag');
	
	// Loads texdomain. https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	load_theme_textdomain('latte', get_template_directory() . '/languages');

	// Add automatic feed links support. https://codex.wordpress.org/Automatic_Feed_Links
	add_theme_support('automatic-feed-links');

	// Add post thumbnails support. https://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'custom-thumbnail', 300, 217 );

	// Add custom background support. https://codex.wordpress.org/Custom_Backgrounds
	add_theme_support('custom-background', array(
		// Default color
		'default-color' => 'FFF',
	));



	// Add post formats support. https://codex.wordpress.org/Post_Formats#Adding_Theme_Support
	add_theme_support('post-formats', array( 'aside', 'chat', 'link', 'quote', 'status', 'video' ));

	// This theme uses wp_nav_menu(). https://codex.wordpress.org/Function_Reference/register_nav_menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'latte' ),
	));
	
	// Adding image sizes. https://developer.wordpress.org/reference/functions/add_image_size/
	add_image_size( 'latte-blogposts', 287, 230, true );
	
	// This theme styles the visual editor to resemble the theme style. https://codex.wordpress.org/Function_Reference/add_editor_style
	
	$font_open_sans = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );
	$font_sanchez = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Sanchez:400,400italic' );
	add_editor_style( array(
		get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css',
		get_template_directory_uri() . '/assets/css/editor-style.css',
		
		$font_open_sans,
		$font_sanchez
	) );
	
	// Added WooCommerce support
	add_theme_support( 'woocommerce' );
	
}

add_action( 'after_setup_theme', 'latte_setup' );

// To add backwards compatibility for titles
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function latte_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'latte_render_title' );
}

// Registering widgets for the theme.
function latte_widgets_init() {

	register_sidebar( array(
		'name'		  => __( 'Sidear', 'latte' ),
		'id'			=> 'sidebar-widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Services Section', 'latte' ),
		'id'			=> 'services-widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Skills Section', 'latte' ),
		'id'			=> 'skills-widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Subscribe Section', 'latte' ),
		'id'			=> 'subscribe-widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="sendinbluetitle">',
		'after_title'   => '</p>',
	) );

}

add_action( 'widgets_init', 'latte_widgets_init' );

// Registering and enqueuing scripts/stylesheets to header/footer.
function latte_scripts() {
	
	$latte_animations_display = get_theme_mod('latte_animations_display');
	$latte_menu_display = get_theme_mod('latte_menu_display');
	
	
	wp_enqueue_style( 'latte_bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'latte_font_awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'latte_style', get_stylesheet_uri());
	
	wp_enqueue_style( 'latte_open_sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style( 'latte_sanchez', '//fonts.googleapis.com/css?family=Sanchez:400,400italic');
	
	
	wp_enqueue_script( 'latte_pt', get_template_directory_uri() . '/assets/js/pt.min.js', array( 'jquery' ),'',true);
	wp_enqueue_script( 'latte_canvas', get_template_directory_uri() . '/assets/js/canvas.js', array( 'jquery' ),'',true);
	wp_enqueue_script( 'latte_classie', get_template_directory_uri() . '/assets/js/classie.js', array( 'jquery' ),'',true);

	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script( 'latte_bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ),'',true);
	
	

	
	wp_enqueue_script( 'latte_scripts_js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ),'',true);

	if( is_page_template( 'template-home.php' ) ) :
		$latte_is_homepage = 0;
	else:
		$latte_is_homepage = 1;
	endif;

	wp_localize_script('latte_scripts_js', 'latte_script_var', array(
		'latte_preloader_display' => get_theme_mod('latte_preloader_display'),
		'latte_animations_display' => get_theme_mod('latte_animations_display'),
		'latte_is_homepage' => $latte_is_homepage,
		'latte_parallax_background' => get_theme_mod('latte_parallax_background', get_template_directory_uri().'/assets/images/background.jpg' ),
		'latte_menu_display' => get_theme_mod('latte_menu_display'),
		'latte_skills_display' => get_theme_mod('latte_skills_display'),
		'latte_services_display' => get_theme_mod('latte_services_display'),
		'latte_blogposts_display' => get_theme_mod('latte_blogposts_display')
	));
}

add_action( 'wp_enqueue_scripts', 'latte_scripts' );



// Default menu for new setups.
function latte_new_setup() {

	echo '<div class="menu-short-container">';
	echo '<ul id="menu-short" class="latte-push-menu menu">';
	echo '<li class="menu-item"><a href="' . esc_url( home_url( '/#intro' ) ) . '">'. __('Home', 'latte') .'</a></li>';
	echo '<li class="menu-item"><a href="' . esc_url( home_url( '/#about' ) ) . '">'. __('About', 'latte') .'</a></li>';
	echo '<li class="menu-item"><a href="' . esc_url( home_url( '/#portfolio' ) ) . '">'. __('Portfolio', 'latte') .'</a></li>';
	
	echo '<li class="menu-item"><a href="' . esc_url( home_url( '/#skillssection' ) ) . '">'. __('Skills', 'latte') .'</a></li>';
	
	
	echo '<li class="menu-item"><a href="' . esc_url( home_url( '/#contact' ) ) . '">'. __('Contact', 'latte') .'</a></li>';
	echo '</ul>';
	echo '</div>';

}

function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];
		
 if ( $script->deps ) { // Check whether the script has any dependencies
 	$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
 }
}
}

add_action( 'wp_default_scripts', 'remove_jquery_migrate' );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');
?>
