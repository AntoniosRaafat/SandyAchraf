<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hobi
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hobi_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'hobi_body_classes' );

/**
 * Get tags.
 */
function hobi_get_tag() {
	$html = '';
	if(has_tag()) {
		$html .= '<div class="blog-post-tag"><span>'. esc_html__('Post Tags','hobi') .'</span>';
			$html .= get_the_tag_list('',' ','');
		$html .= '</div>';
	}
	return $html;
}

// hobi_service_sidebar
function hobi_service_sidebar() {
	if(is_active_sidebar('services-sidebar')){

		dynamic_sidebar( 'services-sidebar');
	}
}
add_action('hobi_service_sidebar','hobi_service_sidebar',20);

// hobi_portfolio_sidebar
function hobi_portfolio_sidebar() {
	if(is_active_sidebar('portfolio-sidebar')){

		dynamic_sidebar( 'portfolio-sidebar');
	}
}
add_action('hobi_portfolio_sidebar','hobi_portfolio_sidebar',20);