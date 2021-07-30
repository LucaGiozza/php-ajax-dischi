<?php

include_once __DIR__ . '/../db/database.php';


$genre = empty($_GET['genre']) ? false : $_GET['genre'];

$alb = [];

if(!$genre || $genre == 'all'){
    $alb = $dischi;
}else{
   foreach($dischi as $canzoni){
       if($canzoni['genre'] == $genre){
           $alb[] = $canzoni;
       }
   }
}


$genres = [];

foreach($dischi as $canzoni){
    if(!in_array($canzoni['genre'], $genres) ){
        $genres[] = $canzoni['genre']; 
    }

}

$risultati = [

    'dischi' => $alb,
    'genres' => $genres
];

header('Content-Type: application/json');
echo json_encode($dischi);
?>