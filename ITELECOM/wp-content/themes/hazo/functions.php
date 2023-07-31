<?php

/**
 * hazo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hazo
 */
$random_ver = rand(1, 1000000000);
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', $random_ver);
}

if (!function_exists('hazo_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hazo_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hazo, use a find and replace
		 * to change 'hazo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('hazo', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Menu Chính', 'hazo'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'hazo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hazo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hazo_content_width', 640);
}
add_action('after_setup_theme', 'hazo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hazo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'hazo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'hazo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'hazo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hazo_scripts()
{
	wp_enqueue_style('hazo-style', get_stylesheet_uri(), array(), _S_VERSION);
	if (is_404()) {
		wp_enqueue_style('hazo-404', get_template_directory_uri() . '/css/404.min.css', array(), _S_VERSION);
	}
	if (class_exists('WooCommerce')) {
		wp_enqueue_style('hazo-woo', get_template_directory_uri() . '/css/woocommerce.min.css', array(), _S_VERSION);
	}
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	if (class_exists('WPCF7')) {
		wp_enqueue_style('hazo-alert', get_template_directory_uri() . '/assets/alert/css/cf7simplepopup-core.css', array(), _S_VERSION);
	}
	wp_enqueue_script('hazo-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	if (class_exists('WPCF7')) {
		wp_enqueue_script('hazo-jquery_alert', get_template_directory_uri() . '/assets/alert/js/cf7simplepopup-core.js', array(), _S_VERSION, true);
		wp_enqueue_script('hazo-jquery_alert_main', get_template_directory_uri() . '/assets/alert/js/sweetalert2.all.min.js', array(), _S_VERSION, true);
	}

	wp_enqueue_style('hazo-bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
	wp_enqueue_style('hazo-flickity', get_template_directory_uri() . '/assets/carousel/flickity.css');
	wp_enqueue_style('hazo-fancybox', get_template_directory_uri() . '/assets/box/jquery.fancybox.min.css');
	wp_enqueue_style('hazo-animate', get_template_directory_uri() . '/assets/animation/animate.css');
	wp_enqueue_style('hazo-style-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);

	wp_enqueue_script('hazo-js-bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js');
	wp_enqueue_script('hazo-js-flickity', get_template_directory_uri() . '/assets/carousel/flickity.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-flickity-fade', get_template_directory_uri() . '/assets/carousel/flickity-fade.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-fancybox', get_template_directory_uri() . '/assets/box/jquery.fancybox.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-infinite-scroll', get_template_directory_uri() . '/assets/js/infinite-scroll.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-wow', get_template_directory_uri() . '/assets/animation/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-zalo', 'https://sp.zalo.me/plugins/sdk.js');
	wp_enqueue_script('hazo-js-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'hazo_scripts');


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/custom-login-admin.php';
/**
 * Customizer Wordpress.
 */
require get_template_directory() . '/inc/customizer-wp.php';

/**
 * Customizer Widget.
 */
require get_template_directory() . '/inc/customizer-widget.php';


if (class_exists('WooCommerce')) {
	/**
	 * Customizer Woocommerce.
	 */
	require get_template_directory() . '/inc/customizer-woo.php';
}

// add_action('init', function () {
// 	pll_register_string('hazo-0', 'Tìm Kiếm');
// 	pll_register_string('hazo-1', 'Xem thêm');
// 	pll_register_string('hazo-2', 'Tin tức khác');
// 	pll_register_string('hazo-3', 'Liên hệ');
// 	pll_register_string('hazo-4', 'Dịch vụ');
// 	pll_register_string('hazo-5', 'Chưa có bài viết nào được đăng');
// 	pll_register_string('hazo-6', 'Kết quả tìm kiếm cho');
// 	pll_register_string('hazo-7', '');
// 	pll_register_string('hazo-8', '');
// 	pll_register_string('hazo-9', '');
// 	pll_register_string('hazo-11', '');
// 	pll_register_string('hazo-12', '');
// 	pll_register_string('hazo-13', '');
// 	pll_register_string('hazo-14', '');
// 	pll_register_string('hazo-15', '');
// 	pll_register_string('hazo-16', '');
// 	pll_register_string('hazo-17', '');
// 	pll_register_string('hazo-18', '');
// 	pll_register_string('hazo-19', '');
// 	pll_register_string('hazo-20', '');
// });


function get_primary_category($category){
	$useCatLink = true;
	// If post has a category assigned.
	if ($category){
	  $category_display = '';
	  $category_link = '';
	  if ( class_exists('WPSEO_Primary_Term') )
	  {
		// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
		$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
		$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
		$term = get_term( $wpseo_primary_term );
		if (is_wp_error($term)) {
		  // Default to first category (not Yoast) if an error is returned
		  $category_display = $category[0]->name;
		  $category_link = get_category_link( $category[0]->term_id );
		} else {
		  // Yoast Primary category
		  $category_display = $term->name;
		  $category_link = get_category_link( $term->term_id );
		}
	  }
	  else {
		// Default, display the first category in WP's list of assigned categories
		$category_display = $category[0]->name;
		$category_link = get_category_link( $category[0]->term_id );
	  }
	  // Display category
	  if ( !empty($category_display) ){
		if ( $useCatLink == true && !empty($category_link) ){
		return '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
		} else {
		return htmlspecialchars($category_display);
		}
	  }
	}
  }



function cptui_register_my_taxes() {

	
	/**
	 * Taxonomy: Service category.
	 */

	$labels = [
		"name" => __("Danh mục dịch vụ", "hazo"),
		"singular_name" => __("Danh mục dịch vụ", "hazo"),
	];


	$args = [
		"label" => __("Danh mục dịch vụ", "hazo"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'dich-vu', 'with_front' => true,],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "service_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy("service_cat", ["service"], $args);

}
add_action('init', 'cptui_register_my_taxes');



// post type

function cptui_register_my_cpts() {

	/**
	 * Post Type: Service.
	 */

	$labels = [
		"name" => __("Dịch vụ", "hazo"),
		"singular_name" => __("Dịch vụ", "hazo"),
	];

	$args = [
		"label" => __("Dịch vụ", "hazo"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "service", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => ["title", "thumbnail"],
		"show_in_graphql" => false,
		'slug' => 'dich-vu'
	];

	register_post_type("service", $args);

}

add_action('init', 'cptui_register_my_cpts');


// add support svg

function create_shortcode_nav_service() {
	
	ob_start(); ?>
	<div class="page-nav__list">
        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center text-uppercase">

			<?php
			   $args = array(
			               'taxonomy' => 'service_cat',
			               'orderby' => 'name',
			               'order'   => 'ASC'
			           );

			   $cats = get_categories($args);

			   foreach($cats as $cat) { ?>

		        <li>
			      	<a href="<?php echo get_category_link( $cat->term_id ) ?>">
			           <?php echo $cat->name; ?>
			      	</a>
			    </li>
			<?php } ?>
		</ul>

		<div class="page-nav__close d-flex align-items-center justify-content-center d-xl-none">
	        <?php echo svg('close')?>
	    </div>
	</div>

	<?php 
	$list_post = ob_get_contents();
	ob_end_clean();

	return $list_post;
}
add_shortcode('dichvu-nav','create_shortcode_nav_service');




// menu shortcode
function my_shortcode_menu($atts='' ) {
	ob_start(); ?> 
	<?php  $value = shortcode_atts( array(
        'name' => '',
    ), $atts ); ?>

		<?php
		$featured_posts = get_field(''. $value['name'].'','option'); ?>
		<section class="page-nav">
	        <div class="container">
	            <div class="page-nav__list">
	                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center text-uppercase">

					<?php foreach( $featured_posts as $post ):
						setup_postdata($post); ?>

						<li>
			            	<a href="<?php echo get_the_permalink($post); ?>"><?php echo $post->post_title ?></a>
			        	</li>
			    	<?php endforeach; ?>

			    	</ul>
				    <div class="page-nav__close d-flex align-items-center justify-content-center d-xl-none">
	                    <?php echo svg('close')?>
	                </div>
	            </div>
        	</div>
        	<div class="page-nav__button d-block d-xl-none position-fixed fw-bold text-dark-grey">
        		<?php echo __('Menu','hazo'); ?>
        	</div>
    </section>
		

	<?php
	return ob_get_clean();
}
add_shortcode( 'my_shortcode_menu', 'my_shortcode_menu' );


