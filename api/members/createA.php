<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';



$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$passCMemb = password_hash($passMemb, PASSWORD_DEFAULT);
$eMailMemb = sql_escape($_POST['eMailMemb']);






sql_insert('MEMBRE','prenomMemb,nomMemb,pseudoMemb,passMemb,eMailMemb,numStat',
                "'$prenomMemb','$nomMemb','$pseudoMemb','$passCMemb','$eMailMemb','3'");

header('Location: ../../views/backend/members/list');