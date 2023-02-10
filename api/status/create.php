<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once __DIR__ . '/../../config.php';
$libStat = sql_escape($_POST['libStat']);
sql_insert('STATUT','libStat',"'$libStat'");

header('Location: ../../views/backend/status/list.php');