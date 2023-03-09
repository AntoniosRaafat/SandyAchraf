<?php
/** 
 * hobi Customizer data
 */
function hobi_customizer( $data ) {
	return array(
		'panel' => array ( 
			'id' => 'hobi',
			'name' => esc_html__('Hobi Customizer','hobi'),
			'priority' => 10,
			'section' => array(
				'header_setting' => array(
					'name' => esc_html__( 'Header Setting', 'hobi' ),
					'priority' => 11,
					'fields' => array(
						array(
							'name' => esc_html__( 'Header Logo', 'hobi' ),
							'id' => 'logo',
							'default' => get_template_directory_uri() . '/img/logo/logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Logo', 'hobi' ),
							'id' => 'retina_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Right', 'hobi' ),
							'id' => 'hobi_header_right',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),

						array(
							'name' => esc_html__( 'Humberger Menu', 'hobi' ),
							'id' => 'hobi_humberger_menu',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Download Button', 'hobi' ),
							'id' => 'hobi_download_btn',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Download Button Text', 'hobi' ),
							'id' => 'hobi_download_btn_text',
							'default' => esc_html__('Download Now','hobi'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Download Button Link', 'hobi' ),
							'id' => 'hobi_download_btn_link',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Side Logo', 'hobi' ),
							'id' => 'hobi_sidebar_logo',
							'default' => get_template_directory_uri() . '/img/logo/footer-logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Side Info', 'hobi' ),
							'id' => 'side_info',
							'default' =>  esc_html__('Contact info','hobi'),
							'type' => 'textarea',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Facebook Url', 'hobi' ),
							'id' => 'side_info_fb_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'hobi' ),
							'id' => 'side_info_twitter_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Google Url', 'hobi' ),
							'id' => 'side_info_google_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'hobi' ),
							'id' => 'side_info_instagram_url',
							'default' => '#',
							'type' => 'text'
						),
					) 
				),
				'page_title_setting'=> array(
					'name'=> esc_html__('Breadcrumb Setting','hobi'),
					'priority'=> 13,
					'fields'=> array(
						array(
							'name'=>esc_html__('Breadcrumb BG Color','hobi'),
							'id'=>'hobi_breadcrumb_bg_color',
							'default'=> esc_html__('#000a2d','hobi'),
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Breadcrumb Padding Top','hobi'),
							'id'=>'hobi_breadcrumb_spacing',
							'default'=> esc_html__('200px','hobi'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),						
						array(
							'name'=>esc_html__('Breadcrumb Bottom Top','hobi'),
							'id'=>'hobi_breadcrumb_bottom_spacing',
							'default'=> esc_html__('200px','hobi'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),
						array(
							'name' => esc_html__( 'Breadcrumb Background Image', 'hobi' ),
							'id' => 'breadcrumb_bg_img',
							'default' => get_template_directory_uri() . '/img/bg/breadc_bg.jpg',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),				
					)
				),
				'blog_setting'=> array(
					'name'=> esc_html__('Blog Setting','hobi'),
					'priority'=> 14,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Show Blog BTN', 'hobi' ),
							'id' => 'hobi_blog_btn_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Blog Button text', 'hobi' ),
							'id' => 'hobi_blog_btn',
							'default' => esc_html__('Read More','hobi'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),													
						array(
							'name' => esc_html__( 'Blog Title', 'hobi' ),
							'id' => 'breadcrumb_blog_title',
							'default' => esc_html__('Blog','hobi'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Details Title', 'hobi' ),
							'id' => 'breadcrumb_blog_title_details',
							'default' => esc_html__('Blog Details','hobi'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),

					)
				),
				'google_map_setting'=> array(
					'name'=> esc_html__('Google Map Setting','hobi'),
					'priority'=> 15,
					'fields'=> array(
						array(
							'name'=>esc_html__('Map Api Key','hobi'),
							'id'=>'hobi_map_api',
							'default'=> esc_html__('','hobi'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),
						
					)
				),
				'color_setting'=> array(
					'name'=> esc_html__('Color Setting','hobi'),
					'priority'=> 16,
					'fields'=> array(
					
						array(
							'name'=>esc_html__('Theme Color','hobi'),
							'id'=>'hobi_color_option',
							'default'=> esc_html__('#FF3D4F','hobi'),
							'transport'	=> 'refresh'  
						),						
					)
				),
				'hobi_footer_setting'=> array(
					'name'=> esc_html__('Footer Setting','hobi'),
					'priority'=> 17,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Footer Switch', 'hobi' ),
							'id' => 'footer_switch',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Footer Logo', 'hobi' ),
							'id' => 'hobi_footer_logo',
							'default' => get_template_directory_uri() . '/img/logo/footer-logo.png',
							'type' => 'image' 
						),
						array(
							'name' => esc_html__( 'Footer Test', 'hobi' ),
							'id' => 'hobi_footer_text',
							'default' => esc_html__('Minimal & Crative Portfolio/CV/Biodata Solution in One Platform.','hobi'),
							'type' => 'textarea' 
						),
						array(
							'name' => esc_html__( 'Facebook Url', 'hobi' ),
							'id' => 'footer_fb_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'hobi' ),
							'id' => 'footer_twitter_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Google Url', 'hobi' ),
							'id' => 'footer_google_url',
							'default' => '#',
							'type' => 'text' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'hobi' ),
							'id' => 'footer_instagram_url',
							'default' => '#',
							'type' => 'text'
						),						
						array(
							'name' => esc_html__( 'Behance Url', 'hobi' ),
							'id' => 'footer_behance_url',
							'default' => '#',
							'type' => 'text'
						),						
						array(
							'name' => esc_html__( 'Footer Right Contact Info', 'hobi' ),
							'id' => 'hobi_footer_text_right',
							'default' => esc_html__('Footer Right Contact Info','hobi'),
							'type' => 'textarea'
						),
						array(
							'name'=>esc_html__('Copy Right','hobi'),
							'id'=>'hobi_copyright',
							'default'=> esc_html__('Copyright &copy;2021 ThemePure. All Rights Reserved Copyright','hobi'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),	
					)
				),
			),
		)
	);

}

add_filter('hobi_customizer_data', 'hobi_customizer');


