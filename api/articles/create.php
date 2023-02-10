<?php



// print_r($_POST); voir si on a bien reçu l'infos

require_once __DIR__ . '../../../config.php';


if(isset($_FILES)) {
    $path = upload_image($_FILES);
    }

$dtCreArt = sql_escape($_POST['dtCreArt']);

$libTitrArt = sql_escape($_POST['libTitrArt']);

$libChapoArt = sql_escape($_POST['libChapoArt']);

$libAccrochArt = sql_escape($_POST['libAccrochArt']);

$parag1Art = sql_escape($_POST['parag1Art']);

$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$urlPhotArt = sql_escape($path);
$numThem = sql_escape($_POST['numThem']);
$numMotCle = sql_escape($_POST['numMotCle']);








sql_insert('ARTICLE','dtCreArt,libTitrArt,libChapoArt,libAccrochArt,parag1Art,libSsTitr1Art,parag2Art,libSsTitr2Art,parag3Art,libConclArt,urlPhotArt,numThem',
                "'$dtCreArt','$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem'");

$numArt = sql_select('article' , 'numArt', null, 'numArt DESC', 1)[0]['numArt'];


foreach($numMotCle as $num){
sql_insert('MotCleArticle','numMotCle,numArt',"'$num','$numArt'");
}

header('Location: ../../views/backend/articles/list.php');
