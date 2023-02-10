
<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$dtCreArt = sql_escape($_POST['dtCreArt']);
$libTitrArt = sql_escape($_POST['libTitrArt']);
$libChapoArt =sql_escape( $_POST['libChapoArt']);
$libAccrochArt = sql_escape($_POST['libAccrochArt']);
$parag1Art = sql_escape($_POST['parag1Art']);
$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$urlPhotArt = sql_escape($_POST['urlPhotArt']);
$numThem = sql_escape($_POST['numThem']);






sql_insert('article','dtCreArt,libTitrArt,libChapoArt,libAccrochArt,parag1Art,libSsTitr1Art,parag2Art,libSsTitr2Art,parag3Art,libConclArt,urlPhotArt,numThem',
                "'$dtCreArt','$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");

header('Location: ../../views/backend/articles/afficher.php');