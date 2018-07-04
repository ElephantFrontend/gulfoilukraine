<?php
/**
 * Gulf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gulf
 */

if ( ! function_exists( 'gulf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gulf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gulf, use a find and replace
		 * to change 'gulf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gulf', get_template_directory() . '/languages' );

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
			'menu_header_adaptive' => esc_html__( 'menu_header_adaptive', 'gulf' ),
			'menu_header_left' => esc_html__( 'menu_header_left', 'gulf' ),
			'menu_header_right' => esc_html__( 'menu_header_right', 'gulf' ),
			'category_product' => esc_html__( 'category_product', 'gulf' ),
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
		add_theme_support( 'custom-background', apply_filters( 'gulf_custom_background_args', array(
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
add_action( 'after_setup_theme', 'gulf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gulf_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gulf_content_width', 640 );
}
add_action( 'after_setup_theme', 'gulf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// создание нормальных ссылок для таксономии
// Удаление slug таксономии:



// Добавление постайпа 
// Register Custom Taxonomy
function tovar_taxonomy() {

	$labels = array(
		'name'                       => _x( 'category_product', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'category_product', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Категория продукта', 'text_domain' ),
		'all_items'                  => __( 'Все категории продуктов', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Добавить категорию продукта', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать категорию продукта', 'text_domain' ),
		'update_item'                => __( 'Обновить категорию продукта', 'text_domain' ),
		'view_item'                  => __( 'Смотреть категорию продукта', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Поиск категории продукта', 'text_domain' ),
		'not_found'                  => __( 'Нет категорий продукта', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'category_product', array( 'tovar_taxonomy' ), $args );

}
add_action( 'init', 'tovar_taxonomy', 0 );
// создание второй таксономии
// Register Custom Taxonomy
function one_taxonomy() {

	$labels = array(
		'name'                       => _x( 'one', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'one', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Масла для легковых авто', 'text_domain' ),
		'all_items'                  => __( 'Все масла для легковых авто', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Добавить новое масло для легковых авто', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать масло для легковых авто', 'text_domain' ),
		'update_item'                => __( 'Обновить масло для легковых авто', 'text_domain' ),
		'view_item'                  => __( 'Смотреть масло для легковых авто', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Нет масел для легковых авто', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'publicly_queryable'         => true,
		'rewrite'                    => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'one_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'one_taxonomy', 0 );
// Создание третей таксономии
// Register Custom Taxonomy
function two_taxonomy() {

	$labels = array(
		'name'                       => _x( 'two', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'two', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Масла для грузовых авто', 'text_domain' ),
		'all_items'                  => __( 'Все масла для грузовых авто', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Добавить масло для грузовых авто', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать масло для грузовых авто', 'text_domain' ),
		'update_item'                => __( 'Обновить масло для грузовых авто', 'text_domain' ),
		'view_item'                  => __( 'Смотреть масло для грузовых авто', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'two_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'two_taxonomy', 0 );
// создание четвертой таксономии
// Register Custom Taxonomy
function three_taxonomy() {

	$labels = array(
		'name'                       => _x( 'three', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'three', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Масла для суден и мототехники', 'text_domain' ),
		'all_items'                  => __( 'Все масла для суден и мототехники', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать масло для суден и мототехники', 'text_domain' ),
		'update_item'                => __( 'Обновть масло для суден и мототехники', 'text_domain' ),
		'view_item'                  => __( 'Смотреть масло для суден и мототехники', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'three_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'three_taxonomy', 0 );
// создание пятой таксономии
// Register Custom Taxonomy
function four_taxonomy() {

	$labels = array(
		'name'                       => _x( 'four', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'four', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Масла для спецтехники', 'text_domain' ),
		'all_items'                  => __( 'Все масла для спецтехники', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Добавить новое масло для спецтехники', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать масло для спецтехники', 'text_domain' ),
		'update_item'                => __( 'Обновить масло для спецтехники', 'text_domain' ),
		'view_item'                  => __( 'Смотреть масло для спецтехники', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'four_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'four_taxonomy', 0 );
// создание шестой таксономии
// Register Custom Taxonomy
function five_taxonomy() {

	$labels = array(
		'name'                       => _x( 'five', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'five', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Масла для Сельскохозяйственной техники', 'text_domain' ),
		'all_items'                  => __( 'Все масла для Сельскохозяйственной техники', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'five_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'five_taxonomy', 0 );
// создание седьмой таксономии
// Register Custom Taxonomy
function six_taxonomy() {

	$labels = array(
		'name'                       => _x( 'six', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'six', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Индустриальные масла', 'text_domain' ),
		'all_items'                  => __( 'Все индустриальные масла', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'six_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'six_taxonomy', 0 );
// создание восьмой таксономии
// Register Custom Taxonomy
function seven_taxonomy() {

	$labels = array(
		'name'                       => _x( 'seven', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'seven', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Газовые, судновые и тепловозные масла', 'text_domain' ),
		'all_items'                  => __( 'Все газовые, судновые и тепловозные масла', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'seven_taxonomy', array( 'products' ), $args );

}
add_action( 'init', 'seven_taxonomy', 0 );


// Register Custom Taxonomy Partners
function partners_taxonomy() {

	$labels = array(
		'name'                       => _x( 'partners_category', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'partners_category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Область', 'text_domain' ),
		'all_items'                  => __( 'Все областя', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Новое название области', 'text_domain' ),
		'add_new_item'               => __( 'Нобавить новую область', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать область', 'text_domain' ),
		'update_item'                => __( 'Обновить область', 'text_domain' ),
		'view_item'                  => __( 'Смотреть область', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Поиск областей', 'text_domain' ),
		'not_found'                  => __( 'Нет областей', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'partners_category', array( 'partners_taxonomy' ), $args );

}
add_action( 'init', 'partners_taxonomy', 0 );
// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'products', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Продукты', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Архив продуктов', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все Продукты', 'text_domain' ),
		'add_new_item'          => __( 'Добавить Новый Продукт', 'text_domain' ),
		'add_new'               => __( 'Добавить Продукт', 'text_domain' ),
		'new_item'              => __( 'Новый продукт', 'text_domain' ),
		'edit_item'             => __( 'Редактировать продукт', 'text_domain' ),
		'update_item'           => __( 'Обновить продукт', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Поиск продукта', 'text_domain' ),
		'not_found'             => __( 'Нет продуктов', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'products', 'text_domain' ),
		'description'           => __( 'products Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'post_tag', 'category_product', 'one_taxonomy', 'two_taxonomy', 'three_taxonomy', 'four_taxonomy', 'five_taxonomy', 'six_taxonomy', 'seven_taxonomy' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'supports' => array(
            'title', // Заголовок объекта типа записи.
            'editor', // Редактор контента.
            'thumbnail', // Миниатюра.
            'excerpt', // Цитата, отрывок.
            'trackbacks', // Отправить обратные ссылки.
            'custom-fields', // Произвольные поля.
            'page-attributes', // Атрибуты.
            'post-formats', // Формат записи.
        ),
	);
	register_post_type( 'products_type', $args );

}
add_action( 'init', 'products_post_type', 0 );
// 
// Register Custom Post Type
function partners_post_type() {

	$labels = array(
		'name'                  => _x( 'partners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'partners', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Партнеры', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Архив партнеров', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все партнеры', 'text_domain' ),
		'add_new_item'          => __( 'Добавить нового партнера', 'text_domain' ),
		'add_new'               => __( 'Добавить партнера', 'text_domain' ),
		'new_item'              => __( 'Новый Партнер', 'text_domain' ),
		'edit_item'             => __( 'Редактировать партнера', 'text_domain' ),
		'update_item'           => __( 'Обновить партнера', 'text_domain' ),
		'view_item'             => __( 'Смотреть партнера', 'text_domain' ),
		'view_items'            => __( 'Смотреть партнеров', 'text_domain' ),
		'search_items'          => __( 'Поиск партнера', 'text_domain' ),
		'not_found'             => __( 'Нет партнеров', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'partners', 'text_domain' ),
		'description'           => __( 'partners Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag', 'partners_category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'partners_type', $args );

}
add_action( 'init', 'partners_post_type', 0 );

function gulf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gulf' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gulf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gulf_widgets_init' );

// 
// Кастомайзер во внешнем виде
add_action('customize_register', function($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Контакты',
            'description' => 'Введите ваши контакты',
            'priority' => 11,
        )
    );
// num1
    $customizer->add_setting(
    'number1'
	);

	$customizer->add_control(
    'number1',
    array(
        'label' => 'Номер телефона1',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// факс
    $customizer->add_setting(
    'fax'
	);

	$customizer->add_control(
    'fax',
    array(
        'label' => 'Факс',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// email
    $customizer->add_setting(
    'email'
	);

	$customizer->add_control(
    'email',
    array(
        'label' => 'Email',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// Почтовый индекс
    $customizer->add_setting(
    'index'
	);

	$customizer->add_control(
    'index',
    array(
        'label' => 'Почтовый индекс',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
// Адресс
    $customizer->add_setting(
    'adress'
	);

	$customizer->add_control(
    'adress',
    array(
        'label' => 'Адрес',
        'section' => 'example_section_one',
        'type' => 'text',
    )
	);
});
// 
// Ограничение title по количеству слов
	function trim_title_words($count, $after) {
  $title = get_the_title();
  $words = split(' ', $title);
  if (count($words) > $count) {
    array_splice($words, $count);
    $title = implode(' ', $words);
  }
  else $after = '';
  echo $title . $after;
}
// ограничить количество слов excerpt
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}
/**
 * Enqueue scripts and styles.
 */
function gulf_scripts() {
	wp_enqueue_style( 'gulf-style', get_stylesheet_uri() );

	wp_enqueue_style( 'gulf-slick-theme', get_template_directory_uri() . '/src/style/slick-theme.css');

	wp_enqueue_style( 'gulf-slick', get_template_directory_uri() . '/src/style/slick.css');

	wp_enqueue_script( 'gulf-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'gulf-slick-js', get_template_directory_uri() . '/src/script/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'gulf-all-js', get_template_directory_uri() . '/src/script/all_scripts.js', array(), '20151215', true );

	// wp_enqueue_script( 'gulf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'gulf-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gulf_scripts' , 'gulf-slick-js', 'gulf-all-js' );

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyChZ5M1Am6jTEPNPIJ-SUvuAepuxNKMFGw';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
//удаление обертки contact form7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
 // 

// AJAX
// AJAX
function true_loadmore_scripts() {
 wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/src/script/loadmore.js', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	// 
	
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
			/*
			 * Со строчки 13 по 27 идет HTML шаблон поста, максимально приближенный к теме TwentyTen.
			 * Для своей темы вы конечно же можете использовать другой код HTML.
			 */
			?>
			<div class="news_block">
				<a href="<?php the_permalink(); ?>">
					<p class="news_block_title"><?php  trim_title_words(5, ''); ?></p>
					<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
						<div class="news_block_img" style="background-image: url(<?php  echo $image_url[0];?>);">
							<p><span><img src="" alt=""> <?php echo get_the_date('m.d.y'); ?></span></p>
						</div>
					<p class="news_block_content">
						<?php the_truncated_post(200); ?>
					</p>
				</a>
				</div>
			<?php
		endwhile;
	endif;

	// 

	
	wp_reset_postdata();
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
// AJAX

// 


// 

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

