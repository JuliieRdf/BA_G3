<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST['numMemb']);

sql_delete('membre',"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');
