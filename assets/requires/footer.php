<footer <?php 
            if ($isRoot) {
                echo 'class="solid-color-footer"';
            }
            
        ?>>
    <div>
        <?php
            echo '<p>'.$setup["footerText"].'</p>';
        ?>
    </div>
</footer>
<?php
echo '<script rel="stylesheet" src="'.$path.'assets/js/main.js"></script';
?>