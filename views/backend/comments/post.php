
<?php
include '../../../header.php';
?>
<?php

$date = date('d-m-y h:i:s');
$post = $_POST["commentaire"];
$pseudo = $_SESSION['pseudo'];
$url = $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$article = $query['article'];
sql_insert('COMMENT', 'libCom,attModOK,delLogiq,numArt,numMemb',"'$post','1','1','1','8'");
//sql_insert('COMMENT', 'dtCreCom,libCom,attModOK,dtModCom,notifComKOAff,delLogiq,numArt,numMemb',"'$date','$post','1',NULL,NULL,'1','$article','SuperMario'");
    ?>