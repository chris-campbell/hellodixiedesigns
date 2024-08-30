<?php 
$content = $args['content'];
$button = "font-aglet-sans px-5 py-2 border-3 border-dixie-black text-base transition duration-200 ease-in-out transform hover:bg-dixie-royal hover:text-dixie-mint rounded-3 ml-2";
?>

<main class="content bg-dixie-mint">
    <div class="main-content max-w-180 mx-auto p-8">
        <?php echo $content['content'] ?>
        <div class="bg-dixie-mint p-8 rounded-lg border-3 border-dixie-black my-12">
            <h4 class="text-dixie-green">Support Hello Dixie</h4>
            <div class="text-dixie-green mb-4 font-aglet-sans">
                We use affiliate links to fund our independent branding advice. Making a purchase through these links
                may earn us a commission at no extra cost to you, without influencing our content. Your support is
                appreciated!
            </div>
            <span class="font-aglet-sans">Or</span>
            <button class="<?php echo $button; ?>">Buy us a coffee</button>
        </div>
</main>