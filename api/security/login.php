<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$pseudoMembPost = sql_escape($_POST['pseudoMemb']);
$passMembPost = sql_escape($_POST['passMemb']);

$password = sql_select("MEMBRE","passMemb","pseudoMemb = '$pseudoMembPost'")[0]['passMemb'];

if (password_verify($passMembPost, $password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}




if ($passCheck == $pseudoCheck){  
    $_SESSION["pseudo"] = $pseudoMemb;
    header('Location: ../../views/frontend/compte.php');
} else {
    header('Location: ../../views/backend/security/login.php');
}