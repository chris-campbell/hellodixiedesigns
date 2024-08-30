<?php
$quote_image = get_template_directory_uri() . '/frontend/images/single-quote.svg';
$quote_text = get_field('featured_designer_quote');
?>

<section class="border-t-3 border-b-3 border-dixie-black bg-dixie-pine relative">
    <img src="<?php echo $quote_image; ?>" class="w-12 h-12 absolute bottom-94 right-1/2 max-1080:hidden" />
    <div class="flex justify-center p-16 max-1080:p-8">
        <div class="max-w-200 flex flex-col items-center">
            <p class="text-lg max-1080:text-md text-center font-chivo-bold-italic mb-6 text-dixie-green capitalize">
                <?php echo $quote_text; ?></p>
            <p class="font-aglet-sans font-semibold text-dixie-green">~ Dixie Campbell</p>
        </div>
    </div>
</section>