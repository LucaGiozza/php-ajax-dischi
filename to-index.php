<?php
//   include 'api/api-dischi.php';
  include  'api/api-dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Esercizio musica</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
    <header>
        <img class="disco-header" src="img/header.jfif" alt="">
        <h1 class="title">Libreria Dischi</h1>
        <button class="header-btn">Accedi</button>
        <button class="header-btn-sx">Registrati</button>

    </header>

    <main>
        <h2>Libreria Musica</h2>
     <div class="container">
        <div class="row">
            <div class="col-4" v-for="cd in dischi">
               <div class="card" style="width: 18rem;">
                  <img :src="dischi.poster" class="card-img-top" :alt="dischi.title">
                  <div class="card-body">
                     <h5 class="card-title">{{dischi.title}}</h5>
                     <p class="card-text">{{dischi.author}}</p>
                     <a href="#" class="btn btn-primary">{{dischi.year}}</a>
                  </div>
                </div>
            </div>
        </div>


     </div>
    
    </main>

    <footer>
        
    </footer>

    </div>
  
   
    <script src="js/script.js"></script>
</body>
</html>