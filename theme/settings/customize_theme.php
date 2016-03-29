<?php

/*
 * Puzzle
 * Theme Customizations
 */

function puzzle_customize_register($wp_customize) {
    /* Header */
    $wp_customize->add_section('puzzle_header' , array(
        'title'      => 'Header',
        'priority'   => 210
    ));
    
    $wp_customize->add_setting('chapter_name', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('chapter_name', array(
        'label'             => 'Chapter Name',
        'section'           => 'puzzle_header',
        'settings'          => 'chapter_name',
        'type'              => 'text'
    ));
    
    $wp_customize->add_setting('header_background_color', array(
        'default'           => 'gray',
        'sanitize_callback' => 'esc_attr',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control('header_background_color', array(
        'label'             => 'Background Color',
        'section'           => 'puzzle_header',
        'settings'          => 'header_background_color',
        'type'              => 'select',
        'choices'           => array(
            'blue'          => 'Blue',
            'orange'        => 'Orange',
            'light-blue'    => 'Light Blue',
            'gray'          => 'Gray',
            'white'         => 'White'
        )
    ));
    
    $wp_customize->add_setting('header_logo_scheme', array(
        'default'           => 'full-color',
        'sanitize_callback' => 'esc_attr',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control('header_logo_scheme', array(
        'label'             => 'Logo Color Scheme',
        'section'           => 'puzzle_header',
        'settings'          => 'header_logo_scheme',
        'type'              => 'select',
        'choices'           => array(
            'full-color'    => 'Full Color',
            'white'         => 'White'
        )
    ));
    
    $wp_customize->add_setting('header_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_attr',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_background_image', array(
        'label'             => 'Background Image',
        'description'       => 'Add a background image. We recommend a JPG no larger than 2000 pixels wide and compressed for web.',
        'section'           => 'puzzle_header',
        'settings'          => 'header_background_image'
    )));
    
    
    /* Social */
    $wp_customize->add_section('puzzle_social_media' , array(
        'title'      => 'Social Media',
        'priority'   => 220
    ));
    
    $social_media = array('facebook', 'meetup', 'twitter', 'tumblr', 'slack');
    
    foreach ($social_media as $soc) {
        $wp_customize->add_setting('social_media[' . $soc . '][link]', array(
            'default'           => '',
            'sanitize_callback' => 'esc_html',
            'transport'         => 'refresh'
        ));
    
        $wp_customize->add_control('social_media[' . $soc . '][link]', array(
            'label'             => ucfirst($soc),
            'section'           => 'puzzle_social_media',
            'settings'          => 'social_media[' . $soc . '][link]',
            'type'              => 'text'
        ));
        
        $wp_customize->add_setting('social_media[' . $soc . '][open_link_in_new_tab]', array(
            'default'           => '',
            'sanitize_callback' => 'esc_attr',
            'transport'         => 'refresh'
        ));
    
        $wp_customize->add_control('social_media[' . $soc . '][open_link_in_new_tab]', array(
            'label'             => 'Open link in new tab',
            'section'           => 'puzzle_social_media',
            'settings'          => 'social_media[' . $soc . '][open_link_in_new_tab]',
            'type'              => 'checkbox'
        ));
    }
}
add_action('customize_register', 'puzzle_customize_register');

?>