<?php 
/**
 * @Packge     : Flatter
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'flatter_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'flatter' ),
        'description' => esc_html__( 'Select the theme color.', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_general_section',
        'default'     => '#78b454',
    )
);

// Header book button label
Epsilon_Customizer::add_field(
    'flatter_book_btn_label',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button Label', 'flatter' ),
        'section'     => 'flatter_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Custom Order', 'flatter' ),
    )
);
// Header book button url
Epsilon_Customizer::add_field(
    'flatter_book_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button URL', 'flatter' ),
        'section'     => 'flatter_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '#',
    )
);
// Header order button bg color
Epsilon_Customizer::add_field(
    'flatter_book_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Order Button Color', 'flatter' ),
        'description' => esc_html__( 'Select the color.', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#ffffff',
    )
);
// Order button color on sticky
Epsilon_Customizer::add_field(
    'flatter_book_btn_hvr_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Order button color on sticky', 'flatter' ),
        'description' => esc_html__( 'Select the color.', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#000000',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'flatter' ),
        'section'     => 'flatter_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'flatter_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'flatter' ),
        'description' => esc_html__( 'Select the header background color.', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'flatter_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover border color field
Epsilon_Customizer::add_field(
    'flatter_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover border color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#78b454',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'flatter_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#000000',
    )
);

// Dropdown menu hover bg color field
Epsilon_Customizer::add_field(
    'flatter_dropdown_menu_hover_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover Bg color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_header_section',
        'default'     => '#78b454',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'flatter_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'flatter' ),
        'description' => esc_html__( 'Set post excerpt length.', 'flatter' ),
        'section'     => 'flatter_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'flatter_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'flatter' ),
        'section'     => 'flatter_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'flatter_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'flatter' ),
        'section'     => 'flatter_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'flatter_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'flatter' ),
        'section'     => 'flatter_blog_section',
        'default'     => true
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'flatter_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'flatter' ),
        'section'           => 'flatter_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'flatter_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'flatter' ),
        'section'           => 'flatter_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'flatter_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'flatter_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'flatter_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'flatter' ),
        'section'     => 'flatter_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'flatter_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'flatter' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'flatter' ),
        'section'     => 'flatter_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'flatter_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'flatter' ),
        'section'     => 'flatter_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'flatter' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'flatter_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'flatter' ),
        'section'     => 'flatter_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);


// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'flatter_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profiles Profile Show/Hide', 'flatter' ),
        'section'     => 'flatter_social_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'flatter_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'flatter_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'flatter' ),
        'button_label' => esc_html__( 'Add new social link', 'flatter' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'flatter' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'flatter' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'flatter' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Dribbble', 'flatter' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-dribbble',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'flatter' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'flatter' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'flatter' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'flatter_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'flatter_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'flatter_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'flatter_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'flatter' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'flatter_footer_section',
        'default'     => '#ffffff',
    )
);

