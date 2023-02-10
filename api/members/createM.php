<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


 
$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);

$pseudoExist = sql_select('Membre', '*', "pseudoMemb= '$pseudoMemb'");





$passCMemb = password_hash($passMemb, PASSWORD_DEFAULT);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$numStat = sql_escape($_POST['numStat']);
$passMemb = sql_escape($_POST['passMemb']);
$confirmpassMemb = sql_escape($_POST['confirmpassMemb']);


if (isset($pseudoExist)){


    if ($passMemb == $confirmpassMemb && $eMailMemb == $confirmeMailMemb) {
        sql_insert(
            'MEMBRE',
            'prenomMemb,nomMemb,pseudoMemb,passMemb,eMailMemb,numStat',
            "'$prenomMemb','$nomMemb','$pseudoMemb','$passCMemb','$eMailMemb','3'"
        );
        header('Location: ../../views/backend/security/login.php');
    } else {
        echo '<script> 
        alert("Mot de passe ou pseudo non correspondant");
        window.location.href="../../views/backend/security/signup.php";
         </script>';
    }

    
}else{
    echo '<script> 
    alert("Pseudo déja existant");
    window.location.href="../../views/backend/security/signup.php";
     </script>';
}

