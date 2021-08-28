<?php 
/**
 * @Packge     : Burger
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'burger_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'burger' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'burger_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'burger_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'burger_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'burger_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'burger_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'burger_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'burger_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'burger_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'burger' ),
            'panel'    => 'burger_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>