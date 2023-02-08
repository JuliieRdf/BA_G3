<?php


require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libMotCle = sql_escape($_POST['libMotCle']);
$numMotCle =sql_escape( $_POST['numMotCle']);


sql_update('MOTCLE',"libMotCle='$libMotCle'","numMotCle =$numMotCle");

header('Location: ../../views/backend/keywords/list.php');