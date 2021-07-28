
<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della
 pagina ci saranno tutti i dischi. -->

<?php

$dischi =[


             [   
              'title' => 'New Jersey',
               'author' => 'Bon Jovi',
               'year' => 1988,
               'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
             ],
             [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],
               [   
                'title' => 'New Jersey',
                 'author' => 'Bon Jovi',
                 'year' => 1988,
                 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
               ],


            ];
    // chiususra arrai dischi


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
    

    


        <!-- <?php
        foreach( $dischi as $musica){
            echo $musica['title'] . '<br>';
            echo $musica['author']. '<br>' ;
            echo $musica['year']. '<br>';
            echo $musica['poster']. '<br>' . '<br>' . '<br>';


           
            
            
           
        }
        ?> -->
        

        
            <?php foreach($dischi as $musica) { ?>
                <ul>

                <li><?php echo $musica['title'] . '<br>'?> </li>
                <li><?php echo $musica['author'] . '<br>'?> </li>
                <li><?php echo $musica['year'] . '<br>'?> </li>
                <li><?php echo $musica['poster'] . '<br>' . '<br>' . '<br>'?> </li>
                </ul>

                <?php } ?>


       



</div>
      
        

      

    </main>

    <footer>
        
    </footer>
   
    
</body>
</html>