
<?php
include '../../../header.php';
?>
<?php

$date = date('d-m-y h:i:s');
$post = $_POST["commentaire"];
$id = $_SESSION['id'];
$url = $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$article = $query['article'];
sql_insert('COMMENT', 'libCom,attModOK,delLogiq,numArt,numMemb',"'$post','1','1','$article','$id'");
//sql_insert('COMMENT', 'dtCreCom,libCom,attModOK,dtModCom,notifComKOAff,delLogiq,numArt,numMemb',"'$date','$post','1',NULL,NULL,'1','$article','SuperMario'");
header("Location: ../../frontend/articles/article.php?numArt=$article");
exit();  ?>
