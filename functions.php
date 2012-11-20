<?php 
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'gallery-1', '527', '378', true );
	add_image_size( 'gallery-2', '411', '196', true );
	add_image_size( 'gallery-3', '481', '383', true );
	add_image_size( 'gallery-4', '201', '201', true );
	add_image_size( 'gallery-5', '324', '201', true );
	add_image_size( 'emotional-left', '650', '324', true );
	add_image_size( 'emotional-right', '302', '324', true );
	add_image_size( 'footer-left', '650', '324', true );
	add_image_size( 'footer-right', '302', '324', true );
	add_image_size( 'footer-logo', '206', '50', false );
	add_image_size( 'featured-page', '302', '700', true );
}

if ( !function_exists( 'admin_script' ) ) :
function admin_script($hook) {
	
 	if( 'post.php' != $hook )
 	        return;
   wp_register_script( 'datepicker-it', get_stylesheet_directory_uri() . '/js/jquery.ui.datepicker-it.js', array(), $version, true );
    // Enqueue stylesheet of bp-dusk chid theme
    wp_enqueue_script( 'datepicker-it' );

  
}
add_action( 'admin_enqueue_scripts', 'admin_script' );
endif;



if ( !defined( MAGGIORANA_TD ) )
	{
		define( 'MAGGIORANA_TD', 'maggiorana_textdomain' );
	}
	/**
	 * maggiorana_child_load_languages
	 * 
	 * set the language for child theme
	 *
	 * @author Piermaria Cosina
	 * 
	 */

		function maggiorana_child_load_languages() {
			load_child_theme_textdomain( MAGGIORANA_TD, get_stylesheet_directory() . '/languages' );
		}

	add_action( 'after_setup_theme', 'maggiorana_child_load_languages' );
	
function lesson_register() {
 
	$labels = array(
		'name' => _x('Lessons', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('Lesson', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New Lesson', 'Lesson item',MAGGIORANA_TD),
		'add_new_item' => __('Add New Lesson Item',MAGGIORANA_TD),
		'edit_item' => __('Edit Lesson Item',MAGGIORANA_TD),
		'new_item' => __('New Lesson Item',MAGGIORANA_TD),
		'view_item' => __('View Lesson Item',MAGGIORANA_TD),
		'search_items' => __('Search Lesson',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor')
	  ); 
 
	register_post_type( 'lesson' , $args );
	}
	
add_action('init', 'lesson_register');

 function event_register() {
 
	$labels = array(
		'name' => _x('Events', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('Event', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New Events', 'Lesson item',MAGGIORANA_TD),
		'add_new_item' => __('Add New Events Item',MAGGIORANA_TD),
		'edit_item' => __('Edit Events Item',MAGGIORANA_TD),
		'new_item' => __('New Events Item',MAGGIORANA_TD),
		'view_item' => __('View Events Item',MAGGIORANA_TD),
		'search_items' => __('Search Events',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor','thumbnail')
	  ); 
 
	register_post_type( 'event' , $args );
	}
	
add_action('init', 'event_register');

function course_register() {
 
	$labels = array(
		'name' => _x('Courses', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('Courses', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New Course', 'Course item',MAGGIORANA_TD),
		'add_new_item' => __('Add New Course Item',MAGGIORANA_TD),
		'edit_item' => __('Edit Course Item',MAGGIORANA_TD),
		'new_item' => __('New Course Item',MAGGIORANA_TD),
		'view_item' => __('View Course Item',MAGGIORANA_TD),
		'search_items' => __('Search Course',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor', 'thumbnail')
	  ); 
 
	register_post_type( 'course' , $args );
	}
	
add_action('init', 'course_register');

function service_register() {
 
	$labels = array(
		'name' => _x('Services', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('Services', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New Service', 'Service item',MAGGIORANA_TD),
		'add_new_item' => __('Add New Service Item',MAGGIORANA_TD),
		'edit_item' => __('Edit Service Item',MAGGIORANA_TD),
		'new_item' => __('New Service Item',MAGGIORANA_TD),
		'view_item' => __('View Service Item',MAGGIORANA_TD),
		'search_items' => __('Search Service',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor', 'thumbnail')
	  ); 
 
	register_post_type( 'service' , $args );
	}
	
add_action('init', 'service_register');

function galleries_register() {
 
	$labels = array(
		'name' => _x('Galleries', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('Gallery', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New Gallery', 'Gallery item',MAGGIORANA_TD),
		'add_new_item' => __('Add New Gallery Item',MAGGIORANA_TD),
		'edit_item' => __('Edit Gallery Item',MAGGIORANA_TD),
		'new_item' => __('New Gallery Item',MAGGIORANA_TD),
		'view_item' => __('View Gallery Item',MAGGIORANA_TD),
		'search_items' => __('Search Gallery',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor','thumbnail')
	  ); 
 
	register_post_type( 'gallery' , $args );
	}
	
add_action('init', 'galleries_register');

function news_register() {
 
	$labels = array(
		'name' => _x('News', 'post type general name',MAGGIORANA_TD),
		'singular_name' => _x('News', 'post type singular name',MAGGIORANA_TD),
		'add_new' => _x('Add New News', 'Gallery item',MAGGIORANA_TD),
		'add_new_item' => __('Add New News Item',MAGGIORANA_TD),
		'edit_item' => __('Edit News Item',MAGGIORANA_TD),
		'new_item' => __('New News Item',MAGGIORANA_TD),
		'view_item' => __('View News Item',MAGGIORANA_TD),
		'search_items' => __('Search News',MAGGIORANA_TD),
		'not_found' =>  __('Nothing found',MAGGIORANA_TD),
		'not_found_in_trash' => __('Nothing found in Trash',MAGGIORANA_TD),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 100,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/mini_logo.png',
		'supports' => array('title', 'editor')
	  ); 
 
	register_post_type( 'news' , $args );
	}
	
add_action('init', 'news_register');

function force_type_private($post)
{

    if ($post['post_type'] == 'lesson' && $post['post_status'] != 'trash' )
    	$post['post_status'] = 'private';
    if ($post['post_type'] == 'course' && $post['post_status'] != 'trash' )
    	$post['post_status'] = 'private';
    if ($post['post_type'] == 'service' && $post['post_status'] != 'trash' )
    	$post['post_status'] = 'private';
    if ($post['post_type'] == 'event' && $post['post_status'] != 'trash' )
    	$post['post_status'] = 'private';
    if ($post['post_type'] == 'news' && $post['post_status'] != 'trash' )
    	$post['post_status'] = 'private';
    
    return $post;
}
add_filter('wp_insert_post_data', 'force_type_private');


function the_title_trim($title)
{
  $pattern[0] = '/Protected:/';
  $pattern[1] = '/Private:/';
  $pattern[2] = '/Privato:/';
  $replacement[0] = ''; // Enter some text to put in place of Protected:
  $replacement[1] = ''; // Enter some text to put in place of Private:
  $replacement[2] = ''; // Enter some text to put in place of Private:

  return preg_replace($pattern, $replacement, $title);
}
add_filter('the_title', 'the_title_trim');

if ( !function_exists( 'bp_dtheme_enqueue_styles' ) ) :
	function wp_enqueue_styles(){
		$version = '0.1';
		
		wp_register_style( 'fonts', get_stylesheet_directory_uri() . '/fonts/stylesheet.css', array(), $version, 'all' );
		wp_register_style( 'screen', get_stylesheet_directory_uri() . '/css/screen.css', array(), $version, 'screen, projection' );
		wp_register_style( 'print', get_stylesheet_directory_uri() . '/css/print.css', array(), $version, 'print' );
		wp_register_script( 'bugherd', get_stylesheet_directory_uri() . '/js/bugherd.js', array(), $version, true );
		wp_register_script( 'accordion', get_stylesheet_directory_uri() . '/js/accordion.js', array('jquery-ui-accordion','jquery'), $version, true );
		wp_register_script( 'over', get_stylesheet_directory_uri() . '/js/over.js', array('jquery'), $version, true );
		wp_register_script( 'scrollto', get_stylesheet_directory_uri() . '/js/jquery.slideto.min.js', array('jquery'), $version, true );
		wp_register_script( 'calendar', get_stylesheet_directory_uri() . '/js/calendar_top.js', array('jquery','scrollto'), $version, true );
		
		
		
		wp_enqueue_style( 'fonts' );
		wp_enqueue_style( 'screen' );
		wp_enqueue_style( 'print' );
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('scrollto');
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'accordion' );
		wp_enqueue_script( 'over' );
		wp_enqueue_script( 'calendar' );
		wp_enqueue_script( 'bugherd' );
	}
	
	add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
endif;

if ( ! function_exists( 'maggiorana_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function maggiorana_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<div class="nav-previous"><?php next_posts_link( __( 'Older posts <span class="meta-nav">&rarr;</span>', MAGGIORANA_TD ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Newer posts', MAGGIORANA_TD ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // twentyeleven_content_nav