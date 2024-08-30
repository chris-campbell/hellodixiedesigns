<?php 
$stay_image = get_template_directory_uri() . '/frontend/images/stay.svg';
?>
<section class="bg-dixie-black border-t-3 border-b-3 border-dixie-black sm:p-16 p-8">
    <div
        class="mx-auto max-w-284 bg-dixie-mint rounded-lg flex justify-between items-center md:p-24 p-12 gap-8 md:gap-16 lg-3:flex-row flex-col">
        <img class="w-1/3 min-w-44" src="<?php echo $stay_image; ?>" />
        <form
            action="https://gmail.us21.list-manage.com/subscribe/post?u=bae692b227827e3c6bd7d0f24&amp;id=5373792b6e&amp;f_id=0062d7e6f0"
            method="POST" class="flex justify-center items-center flex-col">
            <h3 class="font-chivo-bold xs:text-lg-2 text-lg mb-2 text-center">Join Our Monthly Newsletter</h3>
            <p class="font-aglet-sans mb-16 text-center">For branding inspiration and small business tips</p>
            <div class="flex gap-4 w-full md:flex-row flex-col">
                <input type="email" name="EMAIL"
                    class="border-0 border-b-3 border-solid border-dixie-black bg-dixie-mint text-sm p-2 w-full focus:outline-none focus:border-dixie-royal font-aglet-sans"
                    placeholder="Enter Email Address" required>
                <button type="submit" class="bg-dixie-royal px-8 rounded-3 border-3 border-dixie-black"
                    value="Join">Join</button>
            </div>
        </form>
    </div>
</section>