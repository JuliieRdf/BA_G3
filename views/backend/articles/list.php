<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$articles = sql_select('article INNER JOIN thematique ON article.numThem = thematique.numThem', "*");

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
                        <th>Date</th>
                        <th>Titre</th>
                        <th>Chapeau</th>
                        <th>Accroche</th>
                        <th>Thématique</th>
                        <th>Actions</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                        <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['dtCreArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['libAccrochArt']; ?></td>
                            <td><?php echo $article['libThem']; ?></td>
                            
                            
                            <td>
                                <a href="edit.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>

