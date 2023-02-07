<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$numMemb = $_POST['numMemb'];
$prenomMemb = $_POST['prenomMemb'];


$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];
$numStat = $_POST['numStat'];




sql_update('MEMBRE',"prenomMemb='$prenomMemb',nomMemb='$nomMemb',pseudoMemb='$pseudoMemb',passMemb='$passMemb',eMailMemb='$eMailMemb',numStat='$numStat'","numMemb =$numMemb");


header('Location: ../../views/backend/members/list.php');