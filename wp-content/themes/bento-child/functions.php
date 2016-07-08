<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );


}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function my_scripts_method() {
    wp_enqueue_script(
        'customjs',
        get_stylesheet_directory_uri() . '/assets/js/customjs.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>
