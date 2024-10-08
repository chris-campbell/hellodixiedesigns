<?php 
$desktop_logo = get_stylesheet_directory_uri() . '/frontend/images/typing.png';
?>

<section class="grid grid-cols-1 md:grid-cols-2 border-b-3 border-dixie-black bg-dixie-mint">
    <div class="flex justify-center items-center">
        <div class="max-w-244 px-8 py-8 md:p-16">
            <p class="font-aglet-sans font-semibold text-dixie-royal mb-2 max-w-148">Feature Article</p>
            <h1 class="font-chivo-bold pb-6 md-2:text-xl text-lg-2 capitalize">
                <?php the_field('featured_brand_title'); ?>
            </h1>
            <p class="font-aglet-sans pb-6 max-w-148"><?php the_field('featured_article_description'); ?></p>
            <button
                class="font-aglet-sans px-5 py-2 border-3 border-dixie-black text-base transition duration-200 ease-in-out transform hover:bg-dixie-royal hover:text-dixie-mint rounded-lg">View
                Article</button>
        </div>
    </div>
    <div class="flex justify-center max-768:border-l-0 max-768:border-t-3 border-t-0 border-l-3 border-dixie-black">
        <img src="<?php echo $desktop_logo; ?>" class="max-w-full h-auto" />
    </div>
</section>