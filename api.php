
<?php
    // costruzione api
    //  richiamo il foglio che presenta la struttura dati
    require __DIR__ . '/database.php';
        // se la  query genere che leggo tramite il $_GET è vuota o il genere scelto che leggo tramite il $_GET tramite select è all
    if( empty($_GET['genre']) || $_GET['genre'] === 'all') {
        // passa tutto l'array in formato json
        header('Content-Type: application/json');
        echo json_encode($discs);
        // altrimenti
    } else {
        // creo un array vuoto per gli elementi filtrati
        $filteredArray = [];
        // per ogni elemento presente in discs, che si chiama disc,
        foreach($discs as $disc) {
            // se il disco del genere è uguale alla select dell'utente che leggo tramite il $_GET
            if($disc['genre'] === $_GET['genre']) {
                // l'array filtrato diventa popolato dai disc
                $filteredArray[] = $disc;
            }
        }
        // stampo l'array filtrato
        header('Content-Type: application/json');
        echo json_encode($filteredArray);
    }
?>