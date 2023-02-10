<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$comments = sql_select("COMMENT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Les commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Commentaire</th>
                        <th>Date modérateur </th>
                        <th>Notif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td><?php echo $comment['numCom']; ?></td>
                            <td><?php echo $comment['dtCreCom']; ?></td>
                            <td><?php echo $comment['libCom']; ?></td>
                            <td><?php echo $comment['dtModCom']; ?></td>
                            <td><?php echo $comment['dtModCom']; ?></td>
                            <td><?php echo $comment['notifComKOAff']; ?></td>
                            <td><?php echo $comment['delLogiq']; ?></td>
                            <td><?php echo $comment['numMemb']; ?></td>
                            
                            <td>
                                <a href="edit.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>
