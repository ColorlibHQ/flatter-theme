<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Flatter
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function flatter_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'flatter' ),
        'id'            => 'flatter-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'flatter' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-2"><div id="%1$s" class="single-footer-widget footer_widget widget footer_1 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'flatter' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-2"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'flatter' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-2"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'flatter' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-2"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Five', 'flatter' ),
        'id'            => 'footer-5',
        'before_widget' => '<div class="col-xl-4 col-md-12 col-lg-4"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ) );

    
    
}
add_action( 'widgets_init', 'flatter_widgets_init' );
