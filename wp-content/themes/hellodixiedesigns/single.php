<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $post_author = get_the_author();
    }
}

$post_title = get_the_title();
$post_content = get_the_content();
$post_date = get_the_date();
$post_excerpt = get_the_excerpt();
$post_featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');

$post_headline_data = array(
    'title' => $post_title,
    'excerpt' => $post_excerpt,
    'author' => $post_author,
    'date'=> $post_date
);

$post_content_data = array(
    'content' => $post_content,
);
?>

<section>
    <?php 
    get_template_part('partials/blog-single/hero-image', null , array('hero-image' => $post_featured_image));
    get_template_part('partials/blog-single/headline', null , $post_headline_data);
    get_template_part('partials/blog-single/content', null , array('content' => $post_content_data));
    ?>
</section>

<?php
get_footer();
?>