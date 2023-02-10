<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libThem =sql_escape( $_POST['libThem']);

$numThem =sql_escape( $_POST['numThem']);


sql_update('thematique',"libThem='$libThem'","numThem =$numThem");

header('Location: ../../views/backend/thematiques/list.php');