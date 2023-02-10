<?php

require_once __DIR__ . '/../../config.php';


$numArt = $_POST['numArt'];


sql_delete('motCleArticle', "numArt = $numArt");

sql_delete('article',"numArt = $numArt");




header('Location: ../../views/backend/articles/list.php');
