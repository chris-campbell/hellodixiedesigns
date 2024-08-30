<?php 
$desktop_logo = get_template_directory_uri() . '/frontend/images/logo.svg';
$mobile_logo = get_stylesheet_directory_uri() . '/frontend/images/mobile-logo.svg';
?>

<header class="py-8 bg-dixie-mint border-b-3 border-dixie-black">
    <div class="flex sm:flex-row flex-col justify-between items-center max-w-382 mx-auto px-8">
        <div data-id="nav-mobile" class="flex justify-between w-full sm:mb-0">
            <div>
                <a href="/" aria-label="Site main logo">
                    <img class="w-40 sm:inline hidden" src="<?php echo $desktop_logo; ?>" alt="Desktop Logo" />
                </a>
                <a href="/" aria-label="Site main logo">
                    <img class="w-12 sm:hidden inline" src="<?php echo $mobile_logo; ?>" alt="Mobile Logo" />
                </a>
            </div>
            <div>
                <button class="sm:hidden block relative w-10 h-6 focus:outline-none" aria-label="button"
                    onclick="toggle()">
                    <span class="block absolute h-0.5 w-5 bg-black top-1 left-1/2 transform -translate-x-1/2"></span>
                    <span
                        class="block absolute h-0.5 w-5 bg-black top-1/2 transform -translate-y-1/2 left-1/2 -translate-x-1/2"></span>
                    <span class="block absolute h-0.5 w-5 bg-black bottom-1 left-1/2 transform -translate-x-1/2"></span>
                </button>
            </div>
        </div>

        <nav data-id="nav-toggle" id="header-nav" class="sm:block hidden">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'container_class' => 'menu',
                'items_wrap' => '<ul class="flex sm:flex-row flex-col items-center justify-between gap-8">%3$s</ul>',
            ));
            ?>
        </nav>
    </div>
</header>