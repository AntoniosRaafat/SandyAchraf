<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package hobi
 */

/**
*
* hobi header
*/
add_action('hobi_header_style', 'hobi_check_header', 10);

function hobi_check_header() {
	$hobi_header_style = function_exists('get_field') ? get_field( 'header_style' ) : NULL;

	if( $hobi_header_style == 'default' ) {
		hobi_header_default();
	}
	else {
		hobi_header_default();
	}
}

/**
* header style 1
*/
function hobi_header_default() {
	$hobi_menu_column = get_theme_mod('hobi_header_right') ? '7': '10' ;
	$hobi_menu_center = get_theme_mod('hobi_header_right') ? 'center': 'right' ;

	?>

	    <header>
	        <div id="header-sticky" class="header-area">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex align-items-center">
	                        <div class="logo">
	                            <?php hobi_header_logo(); ?>
	                        </div>
	                    </div>
	                    <div class="col-xl-<?php print esc_attr($hobi_menu_column); ?> d-none d-xl-block">
	                        <div class="main-menu text-<?php print esc_attr($hobi_menu_center); ?>">
	                            <nav id="mobile-menu">
									<?php wp_nav_menu( array(
			                            	'theme_location' => 'main-menu',
			                            	'menu_class' => 'hobi-nav',
											'fallback_cb'     => 'hobi_Navwalker::fallback',
											'walker'          => new hobi_Navwalker(),
			                            ) );
		                            ?>
	                            </nav>
	                        </div>
	                    </div>
	                    <?php hobi_header_right(); ?>
	                    <div class="col-12">
	                        <div class="hibo-mobile-menu"></div>
	                    </div>
	                </div>
	            </div>
	            <!-- side-bar start -->
	            <div class="btn-menu-main">
	                <i class="fas fa-times crose"></i>

					<?php print hobi_sidebar_logo('side_logo', esc_html__('Side Logo','hobi')); ?> 

					<?php print hobi_side_info('side_info', esc_html__('Contact Info','hobi')); ?> 

					<?php print hobi_side_social('side_social_info', esc_html__('Sidebar Social Info','hobi')); ?> 
	            </div>
	            <!-- side-bar end -->
	        </div>
	    </header>
<?php 
}

/** 
 * [hobi_header_quote description]
 * @return [type] [description]
 */
function hobi_header_right() { 

	$hobi_header_right 		= get_theme_mod('hobi_header_right');
	$hobi_humberger_menu 	= get_theme_mod('hobi_humberger_menu');
	$hobi_download_btn 		= get_theme_mod('hobi_download_btn');
	$hobi_download_btn_text 	= get_theme_mod('hobi_download_btn_text');
	$hobi_download_btn_link 	= get_theme_mod('hobi_download_btn_link');
	?>
		<?php if($hobi_header_right): ?>
        <div class="col-xl-3 col-lg-9 col-md-8  d-flex align-items-center justify-content-end">
            <div class="header-right">
            	<?php if($hobi_humberger_menu): ?>
                <div class="bar f-right">
                    <i class="fas fa-bars"></i>
                </div>
                <?php endif; ?>
                <?php if($hobi_download_btn): ?>
                <div class="f-right">
                    <a href="<?php print esc_url($hobi_download_btn_link); ?>" class="btn header-btn"><?php print esc_html($hobi_download_btn_text); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>


<?php 
} 


function hobi_copyright_text(){
	print get_theme_mod('hobi_copyright', esc_html__('Copyright ©2021 ThemePure. All Rights Reserved','hobi'));
}

function hobi_side_info(){
	return get_theme_mod('side_info', esc_html__('Header Sidebar Info','hobi'));
}
function hobi_sidebar_logo(){
	$logo = get_theme_mod('hobi_sidebar_logo',get_template_directory_uri() . '/img/logo/footer-logo.png');
	return '<div class="logo-side mb-30"><a href="/"><img src="'.esc_url($logo).'" alt="'.esc_attr__('img','hobi').'"></a></div>';
}

/** 
 * [header_social_profiles description]
 * @return [type] [description]
 */
function hobi_side_social() {
	$hobi_side_info_fb_url 			= get_theme_mod('side_info_fb_url', '#');
	$hobi_side_info_twitter_url 	= get_theme_mod('side_info_twitter_url', '#');
	$hobi_side_info_behance_url 	= get_theme_mod('side_info_behance_url', '#');
	$hobi_side_info_google_url 		= get_theme_mod('side_info_google_url', '#');
	$hobi_side_info_instagram_url 	= get_theme_mod('side_info_instagram_url', '#');
	?>
	<div class="social-icon-right mt-20">
	    <?php 
		if ($hobi_side_info_fb_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_side_info_fb_url); ?>">
		      <i class="fab fa-facebook-f"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_side_info_twitter_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_side_info_twitter_url); ?>">
		      <i class="fab fa-twitter"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_side_info_behance_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_side_info_behance_url); ?>">
		      <i class="fab fa-behance-square"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_side_info_google_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_side_info_google_url); ?>">
		      <i class="fab fa-google-plus-g"></i>
		  </a>
		  <?php 
		  endif; ?>

	  	<?php 
		if ($hobi_side_info_instagram_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_side_info_instagram_url); ?>">
		      <i class="fab fa-instagram"></i>
		  </a> <?php 
		  endif; ?>
	</div>
<?php 
}


// header logo
function hobi_header_logo() {
	?>
	        <?php 
	        $hobi_logo_on = function_exists('get_field') ? get_field('is_enable_sec_logo') : NULL;
	        $hobi_logo = get_template_directory_uri() . '/img/logo/logo.png';
	        $hobi_logo_white = get_template_directory_uri() . '/img/logo/logo-white.png';

			$hobi_retina_logo = get_template_directory_uri().'/img/logo/logo@2x.png';
		    $hobi_retina_logo_white = get_template_directory_uri().'/img/logo/logo-white@2x.png';

			$hobi_retina_logo  = get_theme_mod('retina_logo',$hobi_retina_logo);
		    $hobi_retina_logo_white  = get_theme_mod('retina_secondary_logo',$hobi_retina_logo_white);

	        $hobi_site_logo = get_theme_mod('logo', $hobi_logo);
	        $hobi_secondary_logo = get_theme_mod('seconday_logo', $hobi_logo_white);
	        ?>
	         
	         <?php
	        if( has_custom_logo()){
	        	the_custom_logo();
	        }else{
	        	
				if($hobi_logo_on === 'on') { ?>
					<a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($hobi_secondary_logo); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($hobi_secondary_logo), '_wp_attachment_image_alt', true); ?>" />
					</a>
					<a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($hobi_retina_logo_white); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($hobi_retina_logo_white), '_wp_attachment_image_alt', true); ?>" />
                    </a>
	        	<?php 
	            }
	            else{ ?>
					<a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($hobi_site_logo); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($hobi_site_logo), '_wp_attachment_image_alt', true); ?>" />
					</a>
					<a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($hobi_retina_logo); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($hobi_retina_logo), '_wp_attachment_image_alt', true); ?>" />
                    </a>
	        	<?php 
	        	}
			}	
			?>
	<?php 
} 

/** 
 * [hobi_header_social_profiles description]
 * @return [type] [description]
 */

function hobi_footer_wrapper() { 
	 ?>
        <div class="footer-area secondary-bg pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="footer-left mb-30">
                            <?php do_action('hobi_footer_left'); ?>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="footer-right">
                        	<div class="footer-right">
                            	<?php print hobi_footer_right('hobi_footer_right', esc_html__('Footer Contact Info','hobi')); ?> 
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <?php
}


add_action('hobi_footer_wrapper','hobi_footer_wrapper',20);

function hobi_footer_logo(){
	$logo = get_theme_mod('hobi_footer_logo');

	if($logo) {
		print '<div class="footer-logo"><a href="/"><img src="'.esc_url($logo).'" alt="'.esc_attr__('img','hobi').'"></a></div>';
	}
}
add_action('hobi_footer_left','hobi_footer_logo',10);

function hobi_footer_text(){
	$hobi_footer_text = get_theme_mod('hobi_footer_text');

	if($hobi_footer_text){
		print '<div class="footer-text"><p>'. esc_html($hobi_footer_text) .'</p></div>';
	}
}
add_action('hobi_footer_left','hobi_footer_text',10);

/** 
 * [header_social_profiles description]
 * @return [type] [description]
 */
function hobi_footer_social() {
	$hobi_footer_fb_url 			= get_theme_mod('footer_fb_url', '#');
	$hobi_footer_twitter_url 	= get_theme_mod('footer_twitter_url', '#');
	$hobi_footer_behance_url 	= get_theme_mod('footer_behance_url', '#');
	$hobi_footer_google_url 		= get_theme_mod('footer_google_url', '#');
	$hobi_footer_instagram_url 	= get_theme_mod('footer_instagram_url', '#');
	?>
	<div class="footer-icon">
	    <?php 
		if ($hobi_footer_fb_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_footer_fb_url); ?>">
		      <i class="fab fa-facebook-f"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_footer_twitter_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_footer_twitter_url); ?>">
		      <i class="fab fa-twitter"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_footer_behance_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_footer_behance_url); ?>">
		      <i class="fab fa-behance-square"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($hobi_footer_google_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_footer_google_url); ?>">
		      <i class="fab fa-google-plus-g"></i>
		  </a>
		  <?php 
		  endif; ?>

	  	<?php 
		if ($hobi_footer_instagram_url != '#'): ?>
		  <a href="<?php print esc_url($hobi_footer_instagram_url); ?>">
		      <i class="fab fa-instagram"></i>
		  </a> <?php 
		  endif; ?>
	</div>
<?php 
}

add_action('hobi_footer_left','hobi_footer_social',20);

function hobi_footer_right(){
	return get_theme_mod('hobi_footer_text_right', esc_html__('Footer Right Info','hobi'));
}



/** 
 * [hobi_breadcrumb_func description]
 * @return [type] [description]
 */
function hobi_breadcrumb_func() { 
	$hobi_invisible_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb') : '';
	if( !$hobi_invisible_breadcrumb ) {
		$bg_img = get_theme_mod('breadcrumb_bg_img');
		$breadcrumb_blog_title_details = get_theme_mod('breadcrumb_blog_title_details','Blog Details');

		$hobi_blog_breadcrumb = get_theme_mod('hobi_blog_breadcrumb', '');
		if ( is_front_page() && is_home() ) { ?>
			<div class="breadcrumb-area breadcrumb-bg front-home">
			</div>
		<?php	
		} elseif ( is_front_page()){?>
		<div class="breadcrumb-area breadcrumb-bg only-front-page">
		</div>
		<?php
		} elseif ( is_home()){ ?>

			<div class="breadcrumb-area breadcrumb-bg secondary-bg breadcrumb-blog-area pt-170 pb-160 breadcrumb-spacing" data-background="<?php print esc_attr($bg_img);?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="innerPage-title text-center">
								<?php 
								if ( is_single() && 'post' == get_post_type() ) { 
									if ( $hobi_blog_breadcrumb == '' ) { ?>
										<h2><?php print esc_html($breadcrumb_blog_title_details); ?></h2>
									<?php 
									}
									else { ?>
										<h2> <?php print esc_html($hobi_blog_breadcrumb);?></h2>
									<?php 
									} ?>
									
									<?php 
								}
								else { ?>
									<h2><?php wp_title(''); ?></h2>
								<?php 
								} ?>
								<nav>
									<ol class="breadcrumb-menu">
										<?php hobi_breadcrumbs(); ?>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
	    <?php
		}
		else { ?>
			<div class="breadcrumb-area breadcrumb-bg secondary-bg breadcrumb-area breadcrumb-others-page pt-170 pb-160 breadcrumb-spacing" data-background="<?php print esc_attr($bg_img);?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="innerPage-title text-center">
								<?php 
								if ( is_single() && 'post' == get_post_type() ) { 
									if ( $hobi_blog_breadcrumb == '' ) { ?>
										<h2><?php print esc_html($breadcrumb_blog_title_details); ?></h2>
									<?php 
									}
									else { ?>
										<h2> <?php print esc_html($hobi_blog_breadcrumb);?></h2>
									<?php 
									} ?>
									
									<?php 
								}
								else { ?>
									<h2><?php wp_title(''); ?></h2>
								<?php 
								} ?>
								<nav>
									<ol class="breadcrumb-menu">
										<?php hobi_breadcrumbs(); ?>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}		
	}
}
add_action('hobi_before_main_content', 'hobi_breadcrumb_func');

// hobi_search_form
function hobi_search_form() { ?>

		<!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                        <input type="search" name="s" value="<?php print esc_attr( get_search_query() ) ?>" placeholder="<?php print esc_attr__('Search here...', 'hobi'); ?>">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

	<?php 
}

add_action('hobi_before_main_content', 'hobi_search_form');

if(!function_exists('hobi_breadcrumbs')) {

	function _hobi_home_callback($home) {
		return $home;
	}

	function _hobi_breadcrumbs_callback($breadcrumbs) {
		return $breadcrumbs;
	}

	function hobi_breadcrumbs() {
		global $post;
		$home = '<li class="breadcrumb-item"><a href="'.esc_url(home_url('/')).'" title="'.esc_attr__('Home','hobi').'">'.esc_html__('Home','hobi').'</a></li>';
		$showCurrent = 1;				
		$homeLink = esc_url(home_url('/'));
		if ( is_front_page() ) { return; }	// don't display breadcrumbs on the homepage (yet)

		print _hobi_home_callback($home);

		if ( is_category() ) {
			// category section
			$thisCat = get_category(get_query_var('cat'), false);
			if (!empty($thisCat->parent)) print get_category_parents($thisCat->parent, TRUE, ' ' . '/' . ' ');
			print '<li class=" active">'.  esc_html__('Archive for category','hobi').' "' . single_cat_title('', false) . '"' . '</li>';
		} 
		elseif ( is_search() ) {
			// search section
			print '<li class=" active">' .  esc_html__('Search results for','hobi').' "' . get_search_query() . '"' .'</li>';
		} 
		elseif ( is_day() ) {
			print '<li class=""><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
			print '<li class="breadcrumb-item"><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> </li>';
			print '<li class="">' . get_the_time('d') .'</li>';
		} 
		elseif ( is_month() ) {
			// monthly archive
			print '<li class=""><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> </li>';
			print '<li class=" active">' . get_the_time('F') .'</li>';
		} 
		elseif ( is_year() ) {
			// yearly archive
			print '<li class="active">'. get_the_time('Y') .'</li>';
		} 
		elseif ( is_single() && !is_attachment() ) {
			// single post or page
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				print '<li class=""><a href="' . $homeLink . '/?post_type=' . $slug['slug'] . '">' . $post_type->labels->singular_name . '</a></li>';
				if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
			} 
			else {
				$cat = get_the_category(); if (isset($cat[0])) {$cat = $cat[0];} else {$cat = false;}
				if ($cat) {$cats = get_category_parents($cat, TRUE, ' ' .' ' . ' ');} else {$cats=false;}
				if (!$showCurrent && $cats) $cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
				print '<li class="">'.$cats.'</li>';
				if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
			}
		} 
		elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			// some other single item
			$post_type = get_post_type_object(get_post_type());
			print '<li class="breadcrumb-item">' . $post_type->labels->singular_name .'<li>';
		} 
		elseif ( is_attachment() ) {
			// attachment section
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); if (isset($cat[0])) {$cat = $cat[0];} else {$cat=false;}
			if ($cat) print get_category_parents($cat, TRUE, ' ' . ' ' . ' ');
			print '<li class=""><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
			if ($showCurrent) print  '<li class="active">'. get_the_title() .'</li>';
		} 
		elseif ( is_page() && !$post->post_parent ) {

			// parent page
			if ($showCurrent) 
				print '<li class="active"><a href="' . get_permalink() . '">'. get_the_title() .'</a></li>';
		} 
		elseif ( is_page() && $post->post_parent ) {
			// child page
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();

			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<li class=""><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				print _hobi_breadcrumbs_callback($breadcrumbs[$i]);
				if ($i != count($breadcrumbs)-1);
			}
			if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
		} 
		elseif ( is_tag() ) {
			// tags archive
			print '<li class="">' .  esc_html__('Posts tagged','hobi').' "' . single_tag_title('', false) . '"' . '</li>';
		} 
		elseif ( is_author() ) {
			// author archive 
			global $author;
			$userdata = get_userdata($author);
			print '<li class="">' .  esc_html__('Articles posted by','hobi'). ' ' . $userdata->display_name . '</li>';
		} 
		elseif ( is_404() ) {
			// 404
			print '<li class="active">'. get_the_title() .'</li>';
		}
	  
		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print '<li class=""> (';
				print  '<li class="active">'.esc_html__('Page','hobi') . ' ' . get_query_var('paged').'</li>';
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print ')</li>';
		}
	}
}

/**
*
* pagination
*/
if( !function_exists('hobi_pagination') ) {

	function _hobi_pagi_callback($home) {
		return $home;
	}

	//page navegation
	function hobi_pagination( $prev, $next, $pages, $args ) {
		global $wp_query, $wp_rewrite;
		$menu = '';
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		
		if( $pages=='' ){
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			
			if(!$pages)
				$pages = 1;
		}

		$pagination = array(
			'base' => add_query_arg('paged','%#%'),
			'format' => '',
			'total' => $pages,
			'current' => $current,
			'prev_text' => $prev,
			'next_text' => $next,
			'type' => 'array'
		);

		//rewrite permalinks
		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );

		$pagi = '';
		if(paginate_links( $pagination )!=''){
			$paginations = paginate_links( $pagination );
			$pagi .= '<ul>';
						foreach ($paginations as $key => $pg) {
							$pagi.= '<li>'.$pg.'</li>';
						}
			$pagi .= '</ul>';
		}

		print _hobi_home_callback($pagi);
	}
}


// color
function hobi_custom_color(){
	$color_code = get_theme_mod( 'hobi_color_option','#FF3D4F');
	wp_enqueue_style( 'hobi-custom', HOBI_THEME_CSS_DIR . 'custom.css', array());
	if($color_code!=''){
		$custom_css = '';
		$custom_css .= ".btn,.main-menu ul > li > a::before,.video-btn-link:hover .video-btn i,.btn-other:hover,.progress-bar,#scrollUp,.button-group button::before,.portfolio-item::before,.education-content::before,.icon-images i,.contact-form input.wpcf7-submit,.slider-thumb::before,.btn-border:hover ,.blog-d-btn .btn,.sidebar-form form button,.widget-title::before,.sidebar-tad li a:hover, .tagcloud a:hover,.paginations ul li:hover a, .paginations ul li .current,.blog-post-tag > a:hover,.comment-form button.btn{ background: ".$color_code."}";

		$custom_css .= ".bar,.slider-content > span,.video-btn i,.video-btn > span,.social-icon-right > a:hover,.section-header span,.services-icon li i,.button-group button.active,.button-group button:hover,.cta-text span,.working-icon i,.work-title h4,.education-header h4,.team-contents span,.tam-icon a:hover,.form-group label span,.counter-image i,.testimonials-footer-content span,.newsfeed-header a,.read-more a,.footer-icon a:hover,.blog-d-btn .btn:hover,.blog-meta > span i,a:focus, a:hover,.blog-title:hover,.sidebar-rc-post .rc-post-content h4 a:hover,.widget li a:hover,.project-details-content h3 a:hover,.author-icon a:hover{ color: ".$color_code."}";

		$custom_css .= " .btn-border:hover,.blog-wrapper.sticky,.blog-d-btn .btn,.wp-block-quote, blockquote,.blog-post-tag > a:hover,.author-wrapper,.comment-form button.btn,.comment-form button.btn:hover,.services-body:hover{ border-color: ".$color_code."}";
		wp_add_inline_style('hobi-custom',$custom_css);
	}
}
add_action('wp_enqueue_scripts', 'hobi_custom_color');


// header top bg color
function hobi_breadcrumb_bg_color(){
    $color_code = get_theme_mod( 'hobi_breadcrumb_bg_color','#000a2d');
    wp_enqueue_style( 'hobi-breadcrumb-bg', HOBI_THEME_CSS_DIR . 'custom.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".secondary-bg{ background: ".$color_code."}";

        wp_add_inline_style('hobi-breadcrumb-bg',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'hobi_breadcrumb_bg_color');

// breadcrumb-spacing top
function hobi_breadcrumb_spacing(){
    $padding_px = get_theme_mod( 'hobi_breadcrumb_spacing','200px');
    wp_enqueue_style( 'hobi-breadcrumb-top-spacing', HOBI_THEME_CSS_DIR . 'custom.css', array());
    if($padding_px!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: ".$padding_px."}";

        wp_add_inline_style('hobi-breadcrumb-top-spacing',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'hobi_breadcrumb_spacing');

// breadcrumb-spacing bottom
function hobi_breadcrumb_bottom_spacing(){
    $padding_px = get_theme_mod( 'hobi_breadcrumb_bottom_spacing','200px');
    wp_enqueue_style( 'hobi-breadcrumb-bottom-spacing', HOBI_THEME_CSS_DIR . 'custom.css', array());
    if($padding_px!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: ".$padding_px."}";

        wp_add_inline_style('hobi-breadcrumb-bottom-spacing',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'hobi_breadcrumb_bottom_spacing');