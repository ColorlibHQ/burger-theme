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
	add_action( 'burger_preloader', 'burger_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'burger_header', 'burger_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'burger_footer', 'burger_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'burger_wrp_start', 'burger_wrp_start_cb', 10 );
	add_action( 'burger_wrp_end', 'burger_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'burger_blog_col_start', 'burger_blog_col_start_cb', 10 );
	add_action( 'burger_blog_col_end', 'burger_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'burger_blog_posts_thumb', 'burger_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'burger_blog_details_wrap_start', 'burger_blog_details_wrap_start_cb', 10 );
	add_action( 'burger_blog_details_wrap_end', 'burger_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'burger_blog_posts_title', 'burger_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'burger_blog_posts_meta', 'burger_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'burger_blog_posts_excerpt', 'burger_blog_posts_excerpt_cb', 10 );
	// add_action( 'burger_blog_posts_excerpt', 'burger_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'burger_blog_posts_info_link', 'burger_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'burger_blog_posts_content', 'burger_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'burger_blog_posts_share', 'burger_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'burger_blog_sidebar', 'burger_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'burger_blog_single_meta', 'burger_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'burger_page_content', 'burger_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'burger_fof', 'burger_fof_cb', 10 );

	

?>