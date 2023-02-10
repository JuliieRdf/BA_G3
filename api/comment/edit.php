<?php


require_once __DIR__ . '/config.php';


$libCom = sql_escape($_POST['libCom']);
$numCom =sql_escape( $_POST['numCom']);


sql_update('COMMENT',"libCom='$libCom'","numCom =$numCom");

header('Location: ../../views/backend/comments/list.php');