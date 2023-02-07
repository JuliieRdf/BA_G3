
<?php




require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libStat = $_POST['libStat'];
$numStat = $_POST['numStat'];


sql_update('STATUT',"libStat='$libStat'","numStat =$numStat");

header('Location: ../../views/backend/status/list.php');