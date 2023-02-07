<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libThem = $_POST['libThem'];

$numThem = $_POST['numThem'];


sql_update('THEMATIQUE',"libThem='$libThem'","numThem =$numThem");

header('Location: ../../views/backend/thematiques/list.php');