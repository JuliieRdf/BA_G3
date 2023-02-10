<?php

require_once __DIR__ . '/../../config.php';


$numMemb = sql_escape($_POST['numMemb']);
$prenomMemb =sql_escape( $_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);




sql_update('membre',"prenomMemb='$prenomMemb',nomMemb='$nomMemb',eMailMemb='$eMailMemb'","numMemb =$numMemb");


header('Location: ../../views/frontend/deco.php');