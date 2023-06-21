<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_cities', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $content = $pdo->prepare("SELECT * FROM `Daten`");
    $content->execute();
    $results = $content->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}
