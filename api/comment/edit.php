<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libCom = sql_escape($_POST['libCom']);
$numCom =sql_escape( $_POST['numCom']);


sql_update('comment',"libCom='$libCom'","numCom =$numCom");

header('Location: ../../views/backend/comments/list.php');