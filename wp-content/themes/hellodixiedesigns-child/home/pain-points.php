<?php 
$desktop_logo = get_stylesheet_directory_uri() . '/frontend/images/typing.png';
$slider_nav = "transition duration-200 ease-in-out transform hover:bg-dixie-royal text-dixie-black bg-dixie-mint h-full top-55";
$fact_count = "p-4 border-2 w-4 h-4 border-dixie-black flex items-center justify-center rounded-3 mb-8";
$fact_class = "font-aglet-sans text-center max-w-140 leading-6 mb-4";
?>

<section class="bg-dixie-mint">
    <div class="grid md:grid-cols-2 grid-cols-1">
        <div
            class="p-16 bg-dixie-green md:border-r-3 md:border-b-0 border-b-3 border-dixie-black flex justify-center items-center">
            <div class="max-w-100 flex flex-col items-center py-0 md:py-28 my-12">
                <h3 class="text-4xl text-dixie-mint font-chivo-bold pb-4 max-w-88 text-center">3 BRANDING FACTS</h3>
                <p class="font-aglet-sans max-w-113 text-dixie-mint text-center">Of many, that every small business
                    owner
                    should know in order to build a brand that is
                    sustainable and successful . </p>
            </div>
        </div>
        <div class="swiper h-auto w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center">
                    <div class="p-16 max-w-3xl flex flex-col items-center">
                        <div class="<?php echo $fact_count; ?>">1</div>
                        <p class="<?php echo $fact_class ?>">Your brand identity is much more
                            than
                            an
                            eye-catching
                            logo. It's the
                            composition of your brand's visual elements like color schemes and typography, intertwined
                            with your messaging, tone of voice, and overall communication strategy.</p>
                    </div>
                </div>

                <div class="swiper-slide flex justify-center items-center">
                    <div class="p-16 max-w-3xl flex flex-col items-center">
                        <div class="<?php echo $fact_count; ?>">2</div>
                        <p class="<?php echo $fact_class ?>">Maecenas condimentum elit auctor massa vulputate, a
                            accumsan metus
                            porttitor.
                            Morbi erat quam, dignissim
                            consectetur magna et</p>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <div class="p-16 max-w-3xl flex flex-col items-center">
                        <div class="<?php echo $fact_count; ?>">3</div>
                        <p class="<?php echo $fact_class ?>">Maecenas condimentum elit auctor massa vulputate, a
                            accumsan metus
                            porttitor.
                            Morbi erat quam, dignissim
                            consectetur magna et</p>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <div class="p-16 max-w-3xl flex flex-col items-center">
                        <div class="<?php echo $fact_count; ?>">4</div>
                        <p class="<?php echo $fact_class ?>">Maecenas condimentum elit auctor massa vulputate, a
                            accumsan metus
                            porttitor.
                            Morbi erat quam, dignissim
                            consectetur magna et</p>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next <?php echo $slider_nav; ?>"></div>
            <div class="swiper-button-prev <?php echo $slider_nav; ?>"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<!-- max-width: 25rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* padding: 6rem; */
    padding-top: 7rem;
    padding-bottom: 7rem;
    margin-top: 3rem;
    margin-bottom: 3rem;
} -->

<script>
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
</script>