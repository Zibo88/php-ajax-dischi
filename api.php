
<?php
    // costruzione api
    // per visualizzarlo aggiungere api.php nell'url 
    require __DIR__ . '/database.php';
    // json_encode funzione che torna un valore in json
    $discs_json = json_encode($discs);
    // tipo di file
    header('Content-Type: application/json');
    // stampo (per vedere cosa stampa immettere nell'url /nome del file al posto del file /index_ajax.html)
    echo $discs_json;
    // per la select è importante sistemare prima la chiamata api filtrata
?>