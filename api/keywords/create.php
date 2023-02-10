<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once __DIR__ . '/../../config.php';

$libMotCle = sql_escape($_POST['libMotCle']);
sql_insert('motcle','libMotCle',"'$libMotCle'");

header('Location: ../../views/backend/keywords/list.php');