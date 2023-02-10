<?php

require_once __DIR__ . '/../../config.php';

$numStat = sql_escape($_POST['numStat']);

sql_delete('statut',"numStat = $numStat");

header('Location: ../../views/backend/status/list.php');
