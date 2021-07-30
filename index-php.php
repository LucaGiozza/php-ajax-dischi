
<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della
 pagina ci saranno tutti i dischi. -->
<?php
include 'db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img class="disco-header" src="img/header.jfif" alt="">
        <h1 class="title">Libreria Dischi</h1>
        <button class="header-btn">Accedi</button>
        <button class="header-btn-sx">Registrati</button>

    </header>

    <main>
    
       
<div class="main-container">
                 <?php foreach($dischi as $album) { ?>

                    <div class="img-container">
                    <img class="foto" src="<?= $album['poster']; ?>" alt="<?= $album['title']; ?>">

                    </div>
                    <div class="descrizione-main">
                    <h3><?= $album['title'];?></h3>
                    <p><?= $album['author'];?></p>
                    <?= $album['year'];?>

                    </div>

                    
                  


                    <?php } ?>


       



</div>
      
        

      

    </main>

    <footer>
        
    </footer>
   
    
</body>
</html>