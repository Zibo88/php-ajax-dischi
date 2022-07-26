<!-- importo il file dal foglio 'database.php' -->
<?php include __DIR__ . '/database.php' ?>
<!-- controllo che sia disponibile -->
<?php var_dump(__DIR__ . '/database.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- creo struttura html -->
    <!-- Header -->
    <header>
        <div class="header-container">
            <img src="" alt="">
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- container  -->
        <div class="main-container">
            <!-- discs container -->
            <!-- creo un ciclo foreach per leggere il contenuto al'interno dell'array $discs passato tramite include, ogni elemento trovato viene denominato $disc -->
            <?php foreach ($discs as $disc) { ?>
                <!-- visualizzo ogni elemento -->
                <!-- <?php var_dump($disc) ?> -->

                <div class="discs-container">
                <!-- single disc -->
                    <div class="disc">
                        <!-- stampo quanto necessario -->
                        <img src="<?php echo $disc['poster'] ?>" alt="disc img">
                        <h2><?php echo $disc['title'] ?></h2>
                        <div><?php echo $disc['author'] ?></div>
                        <div><?php echo $disc['year'] ?></div>
                    </div>
                </div>
            
            <?php } ?>
        </div>
    </main>

</body>
</html>