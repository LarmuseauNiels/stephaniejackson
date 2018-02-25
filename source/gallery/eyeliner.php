<?php
require_once '../autoloader.php';
output::header("gallery");
?>
    <div id="photos" class="clearfix innerwidth">
        <ul id="photo-gallery" class="clearfix">
            <?php
            $files = glob('../img/gallery/eyeliner/*.{jpg,png,gif}', GLOB_BRACE);
            foreach($files as $file) {
                echo "<li class=''><a href='";
                echo $file;
                echo "'>";
                echo "<img src='";
                echo $file;
                echo "'>";
                echo "</a></li>";
            }
            ?>
        </ul>
    </div>
<?php
output::footer();
?>