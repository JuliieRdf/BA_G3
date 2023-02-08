<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$members = sql_select("ARTICLE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2> Liste des articles</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Noms</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td><p><?php echo $member['numArt']; ?></p></td>
                            <td><p><?php echo $member['libTitrArt']; ?></p></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo $member['numArt']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numArt=<?php echo $member['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>

