<?php
include '../../../header.php'; // contains the header and call to config.php

$likes = sql_select('likeArt', "*");



?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Les likes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($likes as $like) { ?>
                        <tr>
                            <td><?php echo $like['numMemb']; ?></td>
                            <td><?php echo $like['numArt']; ?></td>
                            <td><?php echo $like['likeA']; ?></td>
                          

                            <!-- <td><p><?php  
                                echo($member['libStat']);
                            ?></p></td> -->
                            <td>
                                <a href="edit.php?numMemb=<?php echo $like['numArt']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $like['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>