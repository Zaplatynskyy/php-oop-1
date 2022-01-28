<?php

include_once __DIR__ . "/classes/Movies.php";

$movies = [
    new Movie('Inception'),
    new Movie('Hancock'),
    new Movie('The Shawshank Redemption')
];

$movies[0]->setDuration('148');
$movies[0]->setLanguage('Inglese');
$movies[0]->setGenre('Thriller fantascientifico');
$movies[0]->setReleaseDate('2010');

$movies[1]->setDuration('92');
$movies[1]->setLanguage('Inglese');
$movies[1]->setGenre('Azione');
$movies[1]->setReleaseDate('2008');

$movies[2]->setDuration('142');
$movies[2]->setLanguage('Inglese');
$movies[2]->setGenre('Drammatico');
$movies[2]->setReleaseDate('1994');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    
        <?php foreach($movies as $movie){ ?>
            <h2><?php echo $movie->getTitle(); ?></h2>
            
            <ul>
                <li>
                    <strong>Durata :</strong>
                    <?php echo $movie->getDuration(); ?> min
                </li>

                <li>
                    <strong>Lingua originale :</strong>
                    <?php echo $movie->getLanguage(); ?>
                </li>

                <li>
                    <strong>Genere :</strong>
                    <?php echo $movie->getGenre(); ?> 
                </li>

                <li>
                    <strong>Anno di uscita :</strong>
                    <?php echo $movie->getReleaseDate(); ?> 
                </li>
            </ul>
        <?php } ?>
    
</body>
</html>