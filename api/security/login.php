<?php




require_once __DIR__ . '/../../config.php';


$pseudoMembPost = sql_escape($_POST['pseudoMemb']);
$passMembPost = sql_escape($_POST['passMemb']);


$password = sql_select("membre","passMemb","pseudoMemb = '$pseudoMembPost'")[0]['passMemb'];
$email = sql_select('membre', 'eMailMemb',"pseudoMemb = '$pseudoMembPost'")[0]['eMailMemb'];
$prenom = sql_select("membre","prenomMemb","pseudoMemb = '$pseudoMembPost'")[0]['prenomMemb'];
$nom = sql_select('membre', 'nomMemb',"pseudoMemb = '$pseudoMembPost'")[0]['nomMemb'];
$id= sql_select('membre', 'numMemb',"pseudoMemb = '$pseudoMembPost'")[0]['numMemb'];
$stat = sql_select('membre', 'numStat',"pseudoMemb = '$pseudoMembPost'")[0]['numStat'];



if (password_verify($passMembPost, $password)) {
    $_SESSION["pseudo"] = $pseudoMembPost;
    $_SESSION["password"] = $passMembPost;
    $_SESSION["email"] = $email;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["nom"] = $nom ;
    $_SESSION["id"] = $id ;
    $_SESSION["stat"] = $stat ;
    
    header('Location: ../../views/frontend/compte.php');
} else {
    echo '<script> 
    alert("Mauvais mot de passe ou Pseudonyme");
    window.location.href="../../views/backend/security/login.php";
    </script>';
}
