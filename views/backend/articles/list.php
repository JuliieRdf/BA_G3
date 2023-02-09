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
            <h2 class="tableau"> Liste des articles</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            <h3>Id</h3>
                        </th>
                        <th>
                            <h3>Date</h3>
                        </th>
                        <th>
                            <h3>Titre</h3>
                        </th>
                        <th>
                            <h3>Chapeau</h3>
                        </th>
                        <th>
                            <h3>Accroche</h3>
                        </th>
                        <th>
                            <h3>Thématique</h3>
                        </th>
                        <th>
                            <h3>Actions</h3>
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td>
                                <p class="tableau"><?php echo $member['numArt']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['dtCreArt']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['libTitrArt']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['libChapoArt']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['libAccrochArt']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['numThem']; ?></p>
                            </td>


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