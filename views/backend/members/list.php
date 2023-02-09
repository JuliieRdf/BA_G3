<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$members = sql_select('membre INNER JOIN statut ON membre.numStat = statut.numStat', "*");



//sql_select('STATUT INNER JOIN MEMBRE ON statut.numStat = membre.numStat');
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="tableau">Liste des membres</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            <h3>Id </h3>
                        </th>
                        <th>
                            <h3>Prenom</h3>
                        </th>
                        <th>
                            <h3>Nom</h3>
                        </th>
                        <th>
                            <h3>Pseudo</h3>
                        </th>
                        <th>
                            <h3>E-Mail</h3>
                        </th>
                       
                        <th>
                            <h3>Statut</h3>
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td>
                                <p class="tableau"><?php echo $member['numMemb']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['prenomMemb']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['nomMemb']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['pseudoMemb']; ?></p>
                            </td>
                            <td>
                                <p class="tableau"><?php echo $member['eMailMemb']; ?></p>
                            </td>
                            


                            <td>
                                <p class="tableau"><?php
                                    echo ($member['libStat']);
                                    ?></p>
                            </td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>