<?php

require_once __DIR__ . '/../../config.php';

$numThem = sql_escape($_POST['numThem']);

sql_delete('thematique',"numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');