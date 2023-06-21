<?php

function render($path, array $data = []) {
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();

    include __DIR__."/../view/layouts/main.view.php";
}

function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}
