<?php 
$outline_smiley = get_template_directory_uri() . '/frontend/images/outline_smiley.svg';
$slider_nav = "transition duration-200 ease-in-out transform hover:bg-dixie-royal text-dixie-black bg-dixie-mint h-full top-55";
?>

<footer class="bg-dixie-black sm:p-16 p-8 relative">
    <div class="py-16 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-320 mx-auto">
        <div class="flex md:justify-start justify-center">
            <a href="/">
                <img class="mb-8 mx-auto sm:mx-0 w-24" src="<?php echo $outline_smiley; ?>"
                    alt="Hello Dixie blue smiley face logo" />
            </a>
        </div>

        <div class="grid grid-cols-1 xs:grid-cols-3 gap-4">
            <div>
                <h3 class="text-dixie-mint font-chivo-bold md:text-right text-center">Get Around</h3>
                <nav data-id="nav-toggle" id="header-nav" class="mt-4 mb-8">
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'container_class' => 'menu',
                        'items_wrap' => '<ul class="flex flex-col gap-2 sm:gap-4 md:items-end items-center">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            <div>
                <h3 class="text-dixie-mint font-chivo-bold md:text-right text-center">Social</h3>
                <nav data-id="nav-toggle" id="header-nav" class="mt-4 mb-8">
                    <?php 
                    wp_nav_menu(array(
                        'menu' => 'Social',
                        'container' => false,
                        'container_class' => 'menu',
                        'items_wrap' => '<ul class="flex flex-col gap-2 sm:gap-4 md:items-end items-center">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            <div>
                <h3 class="text-dixie-mint font-chivo-bold md:text-right text-center">Legal</h3>
                <nav data-id="nav-toggle" id="header-nav" class="mt-4 mb-8">
                    <?php 
                    wp_nav_menu(array(
                        'menu' => 'Legal',
                        'container' => false,
                        'container_class' => 'menu',
                        'items_wrap' => '<ul class="flex flex-col gap-2 sm:gap-4 md:items-end items-center">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="py-8 bg-dixie-green absolute right-0 left-0">
        <p class="font-aglet-sans text-xs text-dixie-mint block text-center px-4">Hello Dixie
            Designs ©
            Copyright
            2023. All rights reserved.
        </p>
    </div>
</footer>
</body>

</html>