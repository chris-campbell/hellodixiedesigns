<?php
$title = $args['title'];
$excerpt= $args['excerpt'];
$date = $args['date'];
$author = $args['author'];
?>

<section class="headline border-b-3 border-dixie-black bg-dixie-black mb-8">
    <div class="max-w-180 mx-auto pb-2 md:pt-16 pt-8 px-8">
        <h1 class="text-lg md:text-xl font-chivo-bold text-dixie-mint mb-4 max-w-152 capitalize"><?php echo $title; ?>
        </h1>
        <p class="mb-6 font-aglet-sans font-normal text-dixie-mint text-xs leading-5 max-w-140 font">
            <?php echo $excerpt; ?>
        </p>
        <!-- <div class="flex justify-between md:pb-16 pb-8">
            <p class="font-aglet-sans text-xs text-dixie-mint"><?php echo $date; ?></p>
            <p class="font-aglet-sans text-xs text-dixie-mint"><?php echo $author; ?></p>
        </div> -->
    </div>
</section>