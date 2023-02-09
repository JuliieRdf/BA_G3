<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$numMemb = $_POST['numMemb'];

sql_delete('LIKEART',"numMemb = $numMemb");

header('Location: ../../views/backend/like/list.php');