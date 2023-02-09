<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$statuses = sql_select("STATUT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="tableau">Statuts</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            <h3>Id</h3>
                        </th>
                        <th>
                            <h3>Noms</h3>
                        </th>
                        <th>
                            <h3>Actions</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td>
                                <p class="tableau"><?php echo $status['numStat']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $status['libStat']; ?></p>
                            </td>
                            <td>
                                <a href="edit.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>