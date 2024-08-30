<?php

$post = $args['post'];
$title = $post['post']->post_title;
$excerpt = $post['post']->post_excerpt;
$permalink = get_permalink($post['post']->ID);
$date = $post['post']->post_date;
$formattedDate = date('M d, Y', strtotime($date));

$featured_image_id = isset($post['featured_image_id']) ? $post['featured_image_id'] : null;

$featured_image_url = '';
if ($featured_image_id) {
    $image_attributes = wp_get_attachment_image_src($featured_image_id, 'full');
    if ($image_attributes) {
        $featured_image_url = $image_attributes[0];
    }
}

$with_img_transition = "grayscale-100 transition duration-500 ease-in-out image-effect";
$no_img_transition = "";

$with_bg_transition = "border-3 border-dixie-black rounded-xl relative block hover:bg-dixie-royal transition duration-500 ease-in-out";
$no_bg_transition = 'border-3 border-dixie-black rounded-xl relative block hover:bg-dixie-royal';

$bg_transition_class = is_front_page() ? $no_bg_transition : $with_bg_transition;
$img_transition_class = is_front_page() ? $no_img_transition : $with_img_transition;
?>

<a href="<?php echo $permalink ?>" class="<?php echo $bg_transition_class; ?>">
    <div class="hover-effect">
        <div class="w-full min-h-44 border-b-3 border-dixie-black bg-cover bg-center rounded-t-lg <?php echo $img_transition_class;  ?>"
            style="background-image: url('<?php echo $featured_image_url ?>');">
            <div class="absolute inset-0"></div>
        </div>
        <div class="relative">
            <div class="p-8 relative z-10 transition duration-500 ease-in-out">
                <p class="text-base font-aglet-sans pb-2"><?php echo $formattedDate; ?></p>
                <h3 class="font-chivo-bold capitalize pb-4 text-sm"><?php echo $title; ?></h3>
                <p class="font-aglet-sans font-normal not-italic pb-2 text-xs"><?php echo $excerpt; ?></p>
            </div>
        </div>
    </div>
</a>