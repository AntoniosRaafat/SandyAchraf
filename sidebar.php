<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hobi
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<?php dynamic_sidebar( 'right-sidebar' ); ?>
