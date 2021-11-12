<?php

/*------------------------------------*\
    Includes / Requires
\*------------------------------------*/
require_once(get_template_directory() . '/custom_post_type/index.php');
// require get_template_directory() . '/custom_post_type/events.php';
// require get_template_directory() . '/custom_post_type/post.php';

// Carregando scripts e styles
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array( 'jquery' ), '5.1.3', true );
    wp_enqueue_script( 'slide', get_template_directory_uri() . '/js/slide.js', array(), '1.0', 'all' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0', 'all' );
    // wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', array( 'jquery' ), '4.6.1', true );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'contato', get_template_directory_uri() . '/css/contato.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    // wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(), '4.6.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Função de configuração do tema
function wp_theme_config() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    // Registrando menus
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
}

add_action( 'after_setup_theme', 'wp_theme_config', 0 );

function custom_excerpt_length( $length ) {
    return 100;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');

