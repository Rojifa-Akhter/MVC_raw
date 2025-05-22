<?php 
    function linkCSS($cssPath){
        // Construct the full URL for the CSS file
        $url = BASE_URL . "/" . $cssPath;

        // Output the <link> tag with the correct href attribute
        echo '<link rel="stylesheet" href="' . $url . '">';
    }
    function linkJS($jsPath){
        $url = BASE_URL . "/" . $jsPath;

        echo '<script src="'. $url .'"></script>';
    }

?>
