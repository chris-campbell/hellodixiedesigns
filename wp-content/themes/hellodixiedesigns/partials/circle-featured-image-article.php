<?php 
$post = $args['post'];
$title = $post->post_title;
$excerpt = $post->post_excerpt;
$permalink = get_permalink($post->ID);

// Ensure $args['featured_image_id'] is set and not empty
$featured_image_id = isset($args['featured_image_id']) ? $args['featured_image_id'] : null;

$featured_image_url = '';
if ($featured_image_id) {
    $image_attributes = wp_get_attachment_image_src($featured_image_id, 'full');
    if ($image_attributes) {
        $featured_image_url = $image_attributes[0];
    }
}
?>

<a class="sm:max-w-max border-3 border-dixie-black rounded-lg transition duration-200 ease-in-out transform hover:bg-dixie-royal cursor-pointer"
    href="<?php echo $permalink; ?>">
    <article>
        <div class="border-b-3 border-dixie-black">
            <div class="pl-6 pr-6 pt-7 pb-77">
                <?php if ($featured_image_url) : ?>
                <img src="<?php echo $featured_image_url; ?>"
                    class="w-32 h-32 rounded-full border-3 border-dixie-black" />
                <?php endif; ?>
            </div>
        </div>
        <div>
            <div>
                <h3 class="font-chivo-bold capitalize py-4 px-6"><?php echo $title; ?></h3>
                <p class="font-aglet-sans px-6 pb-8"><?php echo $excerpt; ?></p>
            </div>
        </div>
    </article>
</a>