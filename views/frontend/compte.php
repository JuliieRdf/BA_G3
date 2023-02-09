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
        <p><?php
        echo ($_SESSION["stat"]);
        ?></p>

        <a class="btn btn-primary m-1" href="/views/backend/members/editM.php?numMemb=<?php echo ($_SESSION["id"]);  ?>" role="button">
        Changer les infos
        </a>

        <a class="btn btn-primary m-1" href="/api/security/deco.php" role="button">
        Se déconnecter
        </a>

</body>

</html>