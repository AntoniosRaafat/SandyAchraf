<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hobi
 */

$copyright_column = is_active_sidebar( 'footer-menu' ) ? 6 : 12 ;
$text_lg_left = is_active_sidebar( 'footer-menu' ) ? 'text-lg-left' : '' ;
$bg_img = get_theme_mod('footer_bg_img');
$footer_switch = get_theme_mod('footer_switch');
?>

    <footer>

        <?php if($footer_switch): ?>
            <?php do_action('hobi_footer_wrapper'); ?> 
        <?php endif; ?>
        <div class="copyright_area secondary-bg">
            <div class="container">
                <div class="copyright-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text pt-35 pb-35 text-center">
                                <p><?php hobi_copyright_text(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


<?php wp_footer(); ?>

</body>
</html>
