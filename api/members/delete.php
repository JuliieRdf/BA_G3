<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$numMemb = sql_escape($_POST['numMemb']);

sql_delete('MEMBRE',"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');
