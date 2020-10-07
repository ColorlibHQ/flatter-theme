<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'flatter_preloader', 'flatter_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'flatter_header', 'flatter_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'flatter_footer', 'flatter_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'flatter_wrp_start', 'flatter_wrp_start_cb', 10 );
	add_action( 'flatter_wrp_end', 'flatter_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'flatter_blog_col_start', 'flatter_blog_col_start_cb', 10 );
	add_action( 'flatter_blog_col_end', 'flatter_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'flatter_blog_posts_thumb', 'flatter_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'flatter_blog_details_wrap_start', 'flatter_blog_details_wrap_start_cb', 10 );
	add_action( 'flatter_blog_details_wrap_end', 'flatter_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'flatter_blog_posts_title', 'flatter_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'flatter_blog_posts_meta', 'flatter_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'flatter_blog_posts_excerpt', 'flatter_blog_posts_excerpt_cb', 10 );
	// add_action( 'flatter_blog_posts_excerpt', 'flatter_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'flatter_blog_posts_info_link', 'flatter_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'flatter_blog_posts_content', 'flatter_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'flatter_blog_posts_share', 'flatter_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'flatter_blog_sidebar', 'flatter_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'flatter_blog_single_meta', 'flatter_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'flatter_page_content', 'flatter_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'flatter_fof', 'flatter_fof_cb', 10 );

	

?>