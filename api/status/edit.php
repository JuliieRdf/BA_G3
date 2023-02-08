
<?php




require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libStat = sql_escape($_POST['libStat']);
$numStat =sql_escape( $_POST['numStat']);


sql_update('STATUT',"libStat='$libStat'","numStat =$numStat");

header('Location: ../../views/backend/status/list.php');