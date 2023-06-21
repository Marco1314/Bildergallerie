<?php
    $createImages = [];
    foreach($results AS $result) {
        $createImages[] = new GalleryModel($result["src"], $result["title"]);
    }
?>