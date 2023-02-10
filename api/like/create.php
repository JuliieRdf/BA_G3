<?php



// print_r($_POST); voir si on a bien reçu l'infos

require_once __DIR__ . '/../../../config.php';


$numMemb = sql_escape($_POST['numMemb']);
$numArt = sql_escape($_POST['numArt']);
$likeA = sql_escape($_POST['likeA']);

sql_insert('LIKEART','numMemb,numArt,likeA',
                "'$numMemb','$numArt','$likeA'");

header('Location: ../../views/backend/like/list.php');