<?php
function my_child_theme_enqueue_styles() {
    // Define parent theme style handle, should ideally match the parent theme
    // Ensure this handle is unique and descriptive
    $parent_style = 'parent-main-style'; // This is for clarity and to avoid conflict

    // Enqueue the parent theme styles with a clear, unique handle
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/frontend/dist/main.min.css');

    // Enqueue the child theme stylesheet with the parent style as a dependency
    // This ensures the child theme's styles load after the parent's styles
    wp_enqueue_style('child-main-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));

    // Enqueue the child theme's Tailwind compiled CSS
    // Ensure this is generated and reflects your child theme's customizations
    wp_enqueue_style('child-tailwind-styles', get_stylesheet_directory_uri() . '/frontend/dist/main.min.css', array('child-main-style'));

    // Correctly enqueue additional styles and scripts in the child theme
    // Here we make sure to list 'child-tailwind-styles' as a dependency where appropriate
    wp_enqueue_style('photoswipe-css', get_stylesheet_directory_uri() . '/frontend/css/photoswipe.css', array('child-tailwind-styles'));
    wp_enqueue_style('photoswipe-default-skin', get_stylesheet_directory_uri() . '/frontend/css/default-skin/default-skin.min.css', array('child-tailwind-styles'));
    wp_enqueue_script('photoswipe-js', get_stylesheet_directory_uri() . '/frontend/js/photoswipe/photoswipe.min.js', array('jquery', 'child-tailwind-styles'), '', true);
    wp_enqueue_script('photoswipe-ui-default', get_stylesheet_directory_uri() . '/frontend/js/photoswipe/photoswipe-ui-default.js', array('jquery', 'child-tailwind-styles'), '', true);
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');



function my_child_theme_woocommerce_support() {
    add_theme_support('woocommerce');
    // Add other theme support elements for WooCommerce or customize hooks here
}
add_action('after_setup_theme', 'my_child_theme_woocommerce_support');


function customize_woocommerce_product_summary_hooks() {
    // Remove the price
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

    // Remove the excerpt
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

    // Add the price back, but below the excerpt
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 21 );

    // Add the excerpt back
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
}

add_action( 'init', 'customize_woocommerce_product_summary_hooks' );

function woo_related_products_limit() {
    global $product;
    
    $args['posts_per_page'] = 6;
    return $args;
    }
    add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
    function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 3; // 4 related products
    $args['columns'] = 2; // arranged in 2 columns
    return $args;
    }