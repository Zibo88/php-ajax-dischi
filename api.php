<?php
    include __DIR__ . '/database.php';
    // json_encode funzione che torna un valore in json
    $discs_json = json_encode($discs);
    // tipo di file
    header('Content-Type: application/json');
    // stampo
    echo $discs_json;
?>