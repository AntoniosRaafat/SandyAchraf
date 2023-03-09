<?php
/**
 * hobi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hobi
 */

if ( ! function_exists( 'hobi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hobi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hobi, use a find and replace
		 * to change 'hobi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hobi', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'hobi' )
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
		add_theme_support( 'custom-background', apply_filters( 'hobi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Enable custom header
		 */
		add_theme_support('custom-header');

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

		/**
		 * Enable suporrt for Post Formats
		 *
		 * see: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		) );

		// Add theme support for selective refresh for widgets.
		//add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		remove_theme_support( 'widgets-block-editor' );

		add_image_size( 'hobi-team-thumb', 450, 530,array('center','center') );

	}
endif;
add_action( 'after_setup_theme', 'hobi_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hobi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hobi_content_width', 640 );
}
add_action( 'after_setup_theme', 'hobi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hobi_widgets_init() {

	/**
	* blog sidebar
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'hobi' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hobi' ),
		'before_widget' => '<div id="%1$s" class="widget mb-40 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	/**
	* Portfolio Widget
	*/
	register_sidebar(
		array(
			'name' 			=> esc_html__( 'Portfolio Sidebar', 'hobi' ),
			'id' 			=> 'portfolio-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'hobi' ),
			'before_title' 	=> '<h3>',
			'after_title' 	=> '</h3>',
			'before_widget' => '<div class="portfolio-sidebar  %2$s">',
			'after_widget' 	=> '</div>',
		)
	);


}
add_action( 'widgets_init', 'hobi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
define('HOBI_THEME_DIR', get_template_directory() );
define('HOBI_THEME_URI', get_template_directory_uri());
define('HOBI_THEME_CSS_DIR', HOBI_THEME_URI.'/css/');
define('HOBI_THEME_JS_DIR', HOBI_THEME_URI.'/js/');
define('HOBI_THEME_INC', HOBI_THEME_DIR.'/inc/');

/** 
 * hobi_scripts description
 * @return [type] [description]
 */
function hobi_scripts() {
	/**
	* all css files
	*/
	wp_enqueue_style( 'hobi-fonts', hobi_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style( 'bootstrap', HOBI_THEME_CSS_DIR.'bootstrap.min.css', array() );
	wp_enqueue_style( 'owl-carousel', HOBI_THEME_CSS_DIR.'owl.carousel.min.css', array() );
	wp_enqueue_style( 'animate', HOBI_THEME_CSS_DIR.'animate.min.css', array() );
	wp_enqueue_style( 'magnific-popup', HOBI_THEME_CSS_DIR.'magnific-popup.css', array() );
	wp_enqueue_style( 'fontawesome-all', HOBI_THEME_CSS_DIR.'fontawesome-all.min.css', array() );
	wp_enqueue_style( 'meanmenu', HOBI_THEME_CSS_DIR.'meanmenu.css', array() );
	wp_enqueue_style( 'slick', HOBI_THEME_CSS_DIR.'slick.css', array() );
	wp_enqueue_style( 'hobi-default', HOBI_THEME_CSS_DIR.'default.css', array() );
	wp_enqueue_style( 'hobi-main', HOBI_THEME_CSS_DIR.'main.css', array() );
	wp_enqueue_style( 'hobi-style', get_stylesheet_uri() );
	wp_enqueue_style( 'hobi-responsive', HOBI_THEME_CSS_DIR.'responsive.css', array() );

	// all js
	wp_enqueue_script( 'popper', HOBI_THEME_JS_DIR.'popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap', HOBI_THEME_JS_DIR.'bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl-carousel', HOBI_THEME_JS_DIR.'owl.carousel.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'isotope-pkgd', HOBI_THEME_JS_DIR.'isotope.pkgd.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'slick', HOBI_THEME_JS_DIR.'slick.min.js', array('jquery','imagesloaded'), false, true );
	wp_enqueue_script( 'jquery-meanmenu', HOBI_THEME_JS_DIR.'jquery.meanmenu.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'wow', HOBI_THEME_JS_DIR.'wow.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-scrollUp', HOBI_THEME_JS_DIR.'jquery.scrollUp.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-magnific-popup', HOBI_THEME_JS_DIR.'jquery.magnific-popup.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'waypoints', HOBI_THEME_JS_DIR.'waypoints.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-counterup', HOBI_THEME_JS_DIR.'jquery.counterup.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'hobi-plugins', HOBI_THEME_JS_DIR.'plugins.js', array('jquery'), false, true );
	wp_enqueue_script( 'hobi-main', HOBI_THEME_JS_DIR.'main.js', array('jquery'), false, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hobi_scripts' );

/*
Register Fonts
*/
function hobi_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'hobi' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Rubik:300,400,400i,500,700|Rufina:400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template helper function for this theme.
 */
require get_template_directory() . '/inc/template-helper.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* include hobi functions file
*/
require_once HOBI_THEME_INC . 'hobi_navwalker.php';
require_once HOBI_THEME_INC . 'hobi_customizer.php';
require_once HOBI_THEME_INC . 'hobi_customizer_data.php';
require_once HOBI_THEME_INC . 'class-tgm-plugin-activation.php';
require_once HOBI_THEME_INC . 'hobi_add_plugin.php';

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hobi_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'hobi_pingback_header' );

/**
*
* comment section
*
*/
add_filter('comment_form_default_fields', 'hobi_comment_form_default_fields_func');

function hobi_comment_form_default_fields_func($default){
	$default['author'] = '<div class="row">
                            <div class="col-xl-12">
                            	<div class="contacts-name">
                                	<input type="text" name="author" placeholder="'.esc_attr__('Your Name....','hobi').'">
                                </div>
                            </div>';
	$default['email'] = '<div class="col-xl-12">
							<div class="contacts-email">
                            <input type="text" name="email" placeholder="'.esc_attr__('Your Email....','hobi').'">
                        	</div>
                        </div>';
	$default['url'] = '';

	$default['clients_commnet'] = '<div class="col-xl-12">
									<div class="contacts-message">
                                     <textarea id="comment" name="comment" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','hobi').'"></textarea>
                                    </div>';
	return $default;
}

add_filter('comment_form_defaults', 'hobi_comment_form_defaults_func');

function hobi_comment_form_defaults_func($info){
	if( !is_user_logged_in() ){
		$info['comment_field'] = '';
		$info['submit_field'] = '%1$s %2$s</div></div>';
	}else {
		$info['comment_field'] = '<div class="comments-textarea contacts-message">
                                                <textarea id="comment" name="comment" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','hobi').'"></textarea>';
        $info['submit_field'] = '%1$s %2$s</div>';
	}


	$info['submit_button'] = '<button class="btn" type="submit">'.esc_html__('Post Comment','hobi').' </button>';

	$info['title_reply_before'] = '<div class="post-title mb-20">
                                        <h2>';
	$info['title_reply_after'] = '</h2></div>';
	$info['comment_notes_before'] = '';

	return $info;
}

if( !function_exists('hobi_comment') ) {
	function hobi_comment($comment, $args, $depth) {
		$GLOBAL['comment'] = $comment;
		extract($args, EXTR_SKIP);
		$args['reply_text'] = '<i class="fas fa-reply-all"></i> Reply';
		$replayClass = 'comment-depth-' . esc_attr($depth);
		?>
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class($replayClass); ?>>
				<div class="comments-box">
					<div class="comments-avatar">
						<?php print get_avatar($comment, 102, null, null, array('class'=> array())); ?>
					</div>
					<div class="comments-text">
						<div class="avatar-name">
							<h5><?php print get_comment_author_link(); ?></h5>
							<span><?php comment_time( get_option('date_format') ); ?></span>
						</div>
						<?php comment_text(); ?>
						<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?>
					</div>
				</div>
		<?php
	}
}

/**
* shortcode supports for removing extra p, spance etc
*
*/
add_filter( 'the_content', 'hobi_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function hobi_shortcode_extra_content_remove( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

// hobi_search_filter_form
if(!function_exists('hobi_search_filter_form')){
  function hobi_search_filter_form( $form ) {
    
    $form = sprintf( 
    	'<div class="sidebar-form"><form action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="fas fa-search"></i>  </button>
		</form></div>',
		esc_url( home_url('/')),
		esc_attr( get_search_query()),
		esc_html__('Search','hobi')
	);

    return $form;
  }
  add_filter( 'get_search_form','hobi_search_filter_form');
}

function _html_markup_render( $markup ){
	return $markup;
}