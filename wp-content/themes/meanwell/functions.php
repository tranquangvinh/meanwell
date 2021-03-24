<?php



// add js and css to header
add_action( 'wp_enqueue_scripts', 'meanwell_theme_enqueue_styles' );
function meanwell_theme_enqueue_styles() {
    // css
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap-js-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 0, true);
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', 0, true);
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );



require_once 'box-icon/box-icon.php';

// add customize theme settings

add_action('customize_register', function($wp_customize){

    // slider
    $wp_customize->add_setting('item_gallery', array(
        'default'        => '',
    ));
    $wp_customize->add_control( new CDH_Box_Icon_control( $wp_customize, 'item_gallery',
        array(
            'label' => __( 'Affiliations List', 'nova-rklv' ),
            'section' => 'static_front_page',
            'input_args' => [

            ],
            'fields' => [
                ['image', 'image', __("Image", 'nova-rklv')],
                ['link', 'link', __("Link", 'nova-rklv')],
            ]
        )
    ) );

    //logo
    $wp_customize->add_setting('logo', array(
        'default'        => '',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'      => __( 'Upload a logo', 'theme_name' ),
                'section'    => 'static_front_page',
                'settings'   => 'logo',
            )
        )
    );

});






