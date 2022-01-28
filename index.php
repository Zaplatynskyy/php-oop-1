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