<?php

require_once __DIR__ . '/../../../config.php';

$numMemb = $_POST['numMemb'];

sql_delete('LIKEART',"numMemb = $numMemb");

header('Location: ../../views/backend/like/list.php');