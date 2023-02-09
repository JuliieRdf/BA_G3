<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$numMemb = sql_escape($_POST['numMemb']);
$prenomMemb =sql_escape( $_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);




sql_update('MEMBRE',"prenomMemb='$prenomMemb',nomMemb='$nomMemb',eMailMemb='$eMailMemb'","numMemb =$numMemb");


header('Location: ../../index.php');