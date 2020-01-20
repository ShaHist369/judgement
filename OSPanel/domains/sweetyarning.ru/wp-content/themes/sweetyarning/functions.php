<?php
/**
 * sweetyarning functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sweetyarning
 */

if ( ! function_exists( 'sweetyarning_setup' ) ) :
	/**
	 * Sets up theme defaults and registers  for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sweetyarning_setup() {
        define( 'WP_DEBUG', true );
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sweetyarning, use a find and replace
		 * to change 'sweetyarning' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sweetyarning', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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
			'menu-1' => esc_html__( 'Primary', 'sweetyarning' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sweetyarning_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sweetyarning_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sweetyarning_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sweetyarning_content_width', 640 );
}
add_action( 'after_setup_theme', 'sweetyarning_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sweetyarning_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sweetyarning' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sweetyarning' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sweetyarning_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sweetyarning_scripts() {
	wp_enqueue_style( 'sweetyarning-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sweetyarning-main-style', get_template_directory_uri().'/assets/css/style.css' );


	wp_enqueue_script( 'sweetyarning-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'sweetyarning-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sweetyarning_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/options-panel.php';
// connection to woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//remove some default settings woocommerce
//remove title page

//remove result count
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
//remove default category
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//number of products shop page
add_filter( 'loop_shop_per_page', 'bbloomer_redefine_products_per_page', 9999 );

function bbloomer_redefine_products_per_page( $per_page ) {
    $per_page = 6;
    return $per_page;
}



// warp img to div

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
/**
 * WooCommerce Loop Product Thumbs
 **/
if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    }
}
/**
 * WooCommerce Product Thumbnail
 **/
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {

    function woocommerce_get_product_thumbnail(  ) {
        global $post;


        $output = '<div class="imagewrapper">';
        if ( has_post_thumbnail() ) {

            $output .= get_the_post_thumbnail( $post->ID);

        } else {

            $output .= '<img src="'. woocommerce_placeholder_img_src() .'"';

        }

        $output .= '</div>';

        return $output;
    }
}


//remove link

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

// price to title
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_price', 10);


remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart',20);
//remove notice

// add a metaboxes
function ale_add_scripts($hook) {

    // Add general scripts & styles
    wp_enqueue_script( 'aletheme_metaboxes', get_template_directory_uri() . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );

    // Add scripts for metaboxes
    if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
        wp_enqueue_script( 'aletheme_metaboxes', ALETHEME_URL . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );

    }


}
add_action( 'admin_enqueue_scripts', 'ale_add_scripts', 10 );
//get_template_part( 'meta-boxes' );



//add metaboxes.php
require get_template_directory() . '/alethemes/metaboxes/metaboxes.php';
//add aletheme metabox
require get_template_directory() . '/alethemes/config.php';


$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}
function sw_yn_add_mb_to_fr_pg(){
    if (is_front_page()){
        add_meta_box(
            'sw_yn_add_meta_box_to_front_page',           // Unique ID
            'Custom Meta Box Title',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            'page' );
    }

}

add_action('add_meta_boxes','sw_yn_add_mb_to_fr_pg');

// editor front page
function wporg_custom_box_html($post)
{
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'global_notice_nonce', 'global_notice_nonce' );

    $value = get_post_meta( $post->ID, '_global_notice', true );

    echo '<textarea style="width:100%" id="global_notice" name="global_notice">' . esc_attr( $value ) . '</textarea>';

}
