<!-- importo il file dal foglio 'database.php' -->
<?php include __DIR__ . '/database.php' ?>
<!-- controllo che sia disponibile -->
<!-- <?php var_dump(__DIR__ . '/database.php') ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <!-- creo struttura html -->
    <!-- Header -->
    <header>
        <div class="header-container">
            <img class="logo" src="data:image/png;base64,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" alt="">
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- container  -->
        <div class="main-container ">
            <!-- discs container -->
            <!-- creo un ciclo foreach per leggere il contenuto al'interno dell'array $discs passato tramite include, ogni elemento trovato viene denominato $disc -->
            <div class="discs-container flex">
                <?php foreach ($discs as $disc) { ?>
                    <!-- visualizzo ogni elemento -->
                    <!-- <?php var_dump($disc) ?> -->

                    <!-- single disc -->
                        <div class="disc">
                            <!-- stampo quanto necessario -->
                            <img class="poster" src="<?php echo $disc['poster'] ?>" alt="disc img">
                            <h2 class="disc-title" ><?php echo $disc['title'] ?></h2>
                            <div class="disc-author" ><?php echo $disc['author'] ?></div>
                            <div class=" disc-year"><?php echo $disc['year'] ?></div>
                        </div>
                        
                <?php } ?>        
            </div>
            
                 
        </div>
    </main>

</body>
</html>