<?php 
 $bg_color = $args['bg-color'];
?>

<form action="process_form.php" method="post">
    <input
        class="border-3 border-dixie-mint placeholder-dixie-mint p-4 text-dixie-mint <?php echo $bg_color; ?>  max-w-140 w-full rounded-lg h-16 pl-7 font-aglet-sans"
        type="email" id="email" name="email" placeholder="Enter your email">
</form>