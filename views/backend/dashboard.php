<?php
include '../../header.php';

?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titre">Tableau de contrôle de BlogArt</h1>
                <p style="text-align: center;">Bienvenue sur le tableau de bord!</p>
            </div>
            <div class="col-md-12">
                <h3>Paramètres</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                <h3>Page</h3>
                            </th>
                            <th>
                                <h3>Actions</h3>
                            </th>
                            <th>
                                <h3>Commentaires</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Statuts</p>
                            </td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">Modifier</a>

                            </td>
                            <td>
                                <p class="tableau">Statut de chaque personne inscrite sur le blog</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Membres</p>
                            </td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-primary">Modifier</a>

                            </td>
                            <td>
                                <p class="tableau">Gérer les membres inscrits</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Articles</p>
                            </td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-primary">Modifier</a>
                            </td>
                            <td>
                                <p class="tableau">Vue globale des articles</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Thématiques</p>
                            </td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary">Modifier</a>

                            </td>
                            <td>
                                <p class="tableau">Gestion des thématiques du blog</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Commentaires</p>
                            </td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-primary">Modifer</a>

                            </td>
                            <td>
                                <p class="tableau">Gestion des commentaires</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Likes</p>
                            </td>
                            <td>
                                <a href="/views/backend/like/list.php" class="btn btn-primary">Modifier</a>
                            </td>
                            <td>
                                <p class="tableau">Gestion des likes</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Mots clés</p>
                            </td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary">Modifier</a>
                            </td>
                            <td>
                                <p class="tableau">Gestion des mots clés</p>
                            </td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>

</div>