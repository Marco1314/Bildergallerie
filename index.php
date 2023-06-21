<?php
    include __DIR__ ."/inc/all.php";


    $createImages = [];
    foreach($results AS $result) {
        $createImages[] = new GalleryModel($result["src"], $result["title"]);
    }

    render(__DIR__."/view/index.view.php", [
        "images" => $createImages
    ]);
?>