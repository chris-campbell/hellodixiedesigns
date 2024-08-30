<?php 
get_header();

$about_wave = get_template_directory_uri() . '/frontend/images/about_waves.svg';
$profile_image = get_template_directory_uri() . '/frontend/images/about.svg';

/**
* Template Name: About
*/
?>

<main>
    <section
        class="flex justify-center items-center gap-24 max-640:gap-8 py-16 px-12 bg-dixie-green flex-row max-1080:flex-col">
        <img src="<?php echo $profile_image; ?>" />
        <div class="max-w-166">
            <h1 class="text-2xl text-dixie-mint font-chivo sm:text-5xl">"<span class="font-700">A</span> <span
                    class="text-dixie-pine">brand</span> is a <span class="text-dixie-pine">story</span> that is <span
                    class="text-dixie-pine">always</span> being <span class="text-dixie-pine">told</span>."</h1>
            <p class="text-dixie-mint mt-6">- Scott Bedbury</p>
        </div>
    </section>

    <section class="bg-dixie-mint lg-2:py-24  max-1080:py-12 px-12">

        <div class="max-w-284 flex gap-24 mx-auto max-1080:flex-col max-1080:gap-16">
            <img src="<?php echo $about_wave; ?>" class="w-5/12 min-w-[41.666667%] max-640:w-full" />
            <div>
                <p class="mb-6 font-aglet-sans">
                    I''m acutely aware that custom branding often comes with a hefty price tag, and it deeply troubles
                    me to think that anyone might relinquish their dream of building a thriving business simply because
                    custom branding appears financially out of reach.
                </p>
                <p class="mb-16 font-aglet-sans">
                    I also recognize that your path to success is dynamic, filled with new insights and shifting goals.
                    That's why I wholeheartedly advocate for the power of DIY branding. It's a valuable tool for gaining
                    a deeper understanding of your brand and charting your course toward your ultimate vision. I'm here
                    to support you every step of the way, offering a range of products perfectly suited to your needs,
                    regardless of where you are in your branding journey.
                </p>
                <h2 class="mb-4 font-chivo-bold text-2xl">Our Mission</h2>
                <p class="font-aglet-sans">
                    My heartfelt wish is to witness your brand flourish, and for you to become a true expert in all
                    things related to your business identity. Armed with this knowledge, you'll be empowered to make
                    well-informed decisions that not only captivate your audience but also align seamlessly with your
                    brand's core values.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-dixie-mint lg-2:py-24  max-1080:py-12 px-12">
        <div class="max-w-284 mx-auto">
            <h2 class="text-right mb-6 font-chivo-bold text-2xl">Our Values</h2>
            <div class="grid md-2:grid-cols-3 gap-6">

                <article class="bg-dixie-pine border-3 border-dixie-black rounded-lg">
                    <div class="border-b-3 border-dixie-black p-4">
                        <h3 class="text-center font-chivo-bold text-2xl"><?php _e('Faith', ); ?></h3>
                    </div>
                    <div class="p-8">
                        <p class="font-aglet-sans text-center">
                            <?php _e('We prioritize God in our
                            business and emphasize ethical
                            behavior, treating others kindly
                            and respectfully ,as part
                            of our culture.', 'hellodixie-domain'); ?>
                        </p>
                    </div>
                </article>
                <article class="bg-dixie-pine border-3 border-dixie-black rounded-lg">
                    <div class="border-b-3 border-dixie-black p-4">
                        <h3 class="text-center font-chivo-bold text-2xl">Support</h3>
                    </div>
                    <div class="p-8">
                        <p class="font-aglet-sans text-center">
                            We're committed to guiding,
                            supporting, and being a trusted
                            partner for our customers in
                            their branding journey.
                        </p>
                    </div>
                </article>
                <article class="bg-dixie-pine border-3 border-dixie-black rounded-lg">
                    <div class="border-b-3 border-dixie-black p-4">
                        <h3 class="text-center font-chivo-bold text-2xl">Motivation</h3>
                    </div>
                    <div class="p-8">
                        <p class="font-aglet-sans text-center">
                            We champion motivation for
                            success and inspire our
                            community to pursue their
                            dreams passionately
                            and resolutely.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer();
?>