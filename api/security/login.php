<?php




require_once __DIR__ . '/../../../config.php';


$pseudoMembPost = sql_escape($_POST['pseudoMemb']);
$passMembPost = sql_escape($_POST['passMemb']);


$password = sql_select("MEMBRE","passMemb","pseudoMemb = '$pseudoMembPost'")[0]['passMemb'];
$email = sql_select('MEMBRE', 'eMailMemb',"pseudoMemb = '$pseudoMembPost'")[0]['eMailMemb'];
$prenom = sql_select("MEMBRE","prenomMemb","pseudoMemb = '$pseudoMembPost'")[0]['prenomMemb'];
$nom = sql_select('MEMBRE', 'nomMemb',"pseudoMemb = '$pseudoMembPost'")[0]['nomMemb'];
$id= sql_select('MEMBRE', 'numMemb',"pseudoMemb = '$pseudoMembPost'")[0]['numMemb'];
$stat = sql_select('MEMBRE', 'numStat',"pseudoMemb = '$pseudoMembPost'")[0]['numStat'];



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
