<?php


require_once __DIR__ . '/../../../config.php';


$libThem =sql_escape( $_POST['libThem']);

$numThem =sql_escape( $_POST['numThem']);


sql_update('THEMATIQUE',"libThem='$libThem'","numThem =$numThem");

header('Location: ../../views/backend/thematiques/list.php');