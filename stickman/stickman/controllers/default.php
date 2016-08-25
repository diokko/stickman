<?php
    if (!isset($currentPage) || $currentPage == null) {
        $currentPage = "default";
    } 

    include 'views/header.php';
    include 'views/'.$currentPage.'.php';
    include 'views/footer.php';
?>