<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$numArt = sql_escape($_POST['numArt']);

$libTitrArt = sql_escape($_POST['libTitrArt']);
$libChapoArt = sql_escape($_POST['libChapoArt']);
$libAccrochArt = sql_escape($_POST['libAccrochArt']);
$parag1Art = sql_escape($_POST['parag1Art']);
$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$urlPhotArt = sql_escape($_POST['urlPhotArt']);
$numThem = sql_escape($_POST['numThem']);


$numMotCle = sql_escape($_POST['numMotCle']);




sql_update('ARTICLE',"libTitrArt='$libTitrArt',libChapoArt='$libChapoArt',libAccrochArt='$libAccrochArt',
parag1Art='$parag1Art',libSsTitr1Art='$libSsTitr1Art',parag2Art='$parag2Art',libSsTitr2Art='$libSsTitr2Art',
parag3Art='$parag3Art',libConclArt='$libConclArt',urlPhotArt='$urlPhotArt',numThem='$numThem'",
"numArt =$numArt");


sql_delete('motCleArticle', "numArt = $numArt");

foreach($numMotCle as $num){
    sql_insert('MotCleArticle','numMotCle,numArt',"'$num','$numArt'");
    }


header('Location: ../../views/backend/articles/list.php');