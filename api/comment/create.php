<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once __DIR__ . '/../../config.php';

// $dtCreCom = sql_escape($_POST['dtCreCom']);
$numCom = sql_escape($_POST['numCom']);
$dtCreCom = sql_escape($_POST['dtCreCom']);
$libCom = sql_escape($_POST['libCom']);
$dtModCom = sql_escape($_POST['dtModCom']);
$delLogiq = sql_escape($_POST['delLogiq']);
$numArt = sql_escape($_POST['numArt']);

// $attModCom = sql_escape($_POST['attModCom']);
// $dtModCom= sql_escape($_POST['dtModCom']);
// $notifComKOAff = sql_escape($_POST['notifComKOAff']);
// $delLogiq = sql_escape($_POST['delLogiq']);
// sql_insert('comment','dtCreCom,libCom,attModCom,dtModCom,notifComKOAff,delLogiq',"'$dtCreCom','$libCom','$attModCom','$dtModCom','$notifComKOAff','$delLogiq");
sql_insert('comment','libCom',"'$libCom'");

header('Location: ../../views/backend/comments/list.php');