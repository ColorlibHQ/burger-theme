<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Burger
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function burger_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'burger' ),
        'id'            => 'burger-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer One', 'burger' ),
    //     'id'            => 'footer-1',
    //     'before_widget' => '<div class="col-xl-3 col-md-6 col-lg-3"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_1 %2$s">',
    //     'after_widget'  => '</div></div>',
    //     'before_title'  => '<h3 class="footer_title">',
    //     'after_title'   => '</h3>',
    // ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'burger' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'burger' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'burger_widgets_init' );
