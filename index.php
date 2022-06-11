<?php
include_once __DIR__ . '/Classes/Movie.php';

$movies = [
    [
        'titolo' => 'Donnie Darko',
        'genere' => 'Fantascienza',
        'anno' => '2011',
        'regista' => 'Pippo franco',
        'voto' => 5,
    ],
    [
        'titolo' => 'Pippo Baudo va in città',
        'genere' => 'Commedia',
        'anno' => '2022',
        'regista' => 'Pippo baudo',
        'voto' => 2,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Lista Films</h1>
    <ul>
        <?php foreach($movies as $key => $movie){ 
            $films = new Movie($movie['titolo'], $movie['genere'], $movie['anno'], $movie['regista'], $movie['voto']);?>
        <li>
            <?php 
            echo 'Titolo: '.$films->getTitle().'<br>';
            echo 'Genere: '.$films->getGenre().'<br>'; 
            echo 'Anno Uscita: '.$films->getYear().'<br>'; 
            echo 'Regista: '.$films->getDirector().'<br>';
            echo 'Parere: '.$films->getVote().'<br>'; 
            ?>
        </li> <br>
        <?php } ?>
    </ul>
</body>
</html>