<?php
    include __DIR__ . '/database.php';
    $discs_json = json_encode($discs);
    header ('Content-Type : application/json');
    var_dump($discs_json);
?>