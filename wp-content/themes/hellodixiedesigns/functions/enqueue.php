<?php

function hellodixiedesign_files() {
    $version_number = '1.0';
    $style_suffix = '.min.css';
    $js_suffix = '.min.js';

    wp_enqueue_style('main', get_template_directory_uri() . '/frontend/dist/main' . $style_suffix, array(), $version_number);
    wp_enqueue_script('main', get_template_directory_uri() . '/frontend/dist/main' . $js_suffix, array('jquery'), $version_number, true);

    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/pqw8veb.css', array(), null);
}
add_action('wp_enqueue_scripts', 'hellodixiedesign_files');


function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action('init', 'register_my_menu');
  

add_theme_support('post-thumbnails');

function custom_youtube_embed_wrapper_script() {
    ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var iframes = document.querySelectorAll('iframe[src*="youtube.com"]');
    iframes.forEach(function(iframe) {
        var wrapper = document.createElement('div');
        wrapper.className = 'video-container';

        iframe.style.position = 'absolute';
        iframe.style.top = '0';
        iframe.style.left = '0';
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('allow',
            'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        );
        iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
        iframe.parentNode.insertBefore(wrapper, iframe);
        wrapper.appendChild(iframe);
    });
});
</script>
<?php
}
add_action('wp_footer', 'custom_youtube_embed_wrapper_script');

function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );