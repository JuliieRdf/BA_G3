<?php

require_once __DIR__ . '/../../config.php';

$numCom = $_POST['numCom'];

sql_delete('comment',"numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');