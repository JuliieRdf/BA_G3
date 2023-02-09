<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$pseudoMembPost = sql_escape($_POST['pseudoMemb']);
$passMembPost = sql_escape($_POST['passMemb']);

$password = sql_select("MEMBRE","passMemb","pseudoMemb = '$pseudoMembPost'")[0]['passMemb'];
$email = sql_select('MEMBRE', 'eMailMemb',"pseudoMemb = '$pseudoMembPost'")[0]['eMailMemb'];
$prenom = sql_select("MEMBRE","prenomMemb","pseudoMemb = '$pseudoMembPost'")[0]['prenomMemb'];
$nom = sql_select('MEMBRE', 'nomMemb',"pseudoMemb = '$pseudoMembPost'")[0]['nomMemb'];
$id = sql_select('MEMBRE', 'numMemb',"pseudoMemb = '$pseudoMembPost'")[0]['numMemb'];


if (password_verify($passMembPost, $password)) {
    $_SESSION["pseudo"] = $pseudoMembPost;
    $_SESSION["password"] = $passMembPost;
    $_SESSION["email"] = $email;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["nom"] = $nom ;
    $_SESSION["id"] = $id ;

    
    header('Location: ../../views/frontend/compte.php');
} else {
    header('Location: ../../views/backend/security/login.php');
}
