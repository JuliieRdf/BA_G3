<?php
include '../../header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Compte de
        <?php
        echo ($_SESSION["pseudo"]);
        ?>
        </h1>

        <p> <?php
        echo ($_SESSION["password"]);
        echo ($_SESSION["prenom"]);
        echo ($_SESSION["email"]);
        echo ($_SESSION["nom"]);
        echo ($_SESSION["id"]);
        ?></p>

        <a class="btn btn-primary m-1" href="/views/backend/members/edit.php" role="button">
        Changer les infos
        </a>

        <a class="btn btn-primary m-1" href="/api/security/deco.php" role="button">
        Se déconnecter
        </a>

</body>

</html>