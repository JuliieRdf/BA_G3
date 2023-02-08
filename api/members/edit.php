<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$numMemb = sql_escape($_POST['numMemb']);
$prenomMemb =sql_escape( $_POST['prenomMemb']);


$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$passCMemb = password_hash($passMemb, PASSWORD_DEFAULT);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$numStat = sql_escape($_POST['numStat']);




sql_update('MEMBRE',"prenomMemb='$prenomMemb',nomMemb='$nomMemb',pseudoMemb='$pseudoMemb',passMemb='$passCMemb',eMailMemb='$eMailMemb',numStat='$numStat'","numMemb =$numMemb");


header('Location: ../../views/backend/members/list.php');