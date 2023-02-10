<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

$numCom = $_POST['numCom'];

sql_delete('comment',"numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');