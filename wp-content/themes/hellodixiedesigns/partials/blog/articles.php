<?php 
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = 6;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $posts_per_page,
    'paged' => $current_page
);

$query = new WP_Query($args);
?>

<section class="bg-dixie-mint">
    <div class="max-w-320 mx-auto grid grid-cols-1 sm:grid-cols-2 md-2:grid-cols-3 gap-8 p-6 md:p-8 sm:p-16">
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
        ?>
        <div>
            <?php
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'prev_text' => __('« Previous'),
                'next_text' => __('Next »'),
                'mid_size' => 1,
                'current' => max(1, get_query_var('paged')),
                'prev_next' => false,
                'type' => 'list',
                'end_size' => 1,
                'show_all' => false,
                'add_args' => false,
                'class' => 'pagination',
                'before_page_number' => '<span class="pagination-link">',
                'after_page_number' => '</span>',
              ));
            ?>
        </div>
    </div>
</section>