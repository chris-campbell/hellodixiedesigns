<?php
// Prepare the arguments for the WP_Query
$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC'
);

// Fetch the posts using WP_Query
$query = new WP_Query($args);
?>

<section class="bg-dixie-mint md-2:p-24 p-8 max-1080:py-14">
    <div class="max-w-320 mx-auto grid grid-cols-1 md-2:grid-cols-3 gap-8">
        <?php 
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                // Prepare post data with featured image ID
                $post = array(
                    'post' => $query->post,
                    'featured_image_id' => get_post_thumbnail_id()
                );


                // Include the template part with post data
                get_template_part('partials/board-featured-image-article', null, array('post' => $post));
            }
        }
        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
</section>