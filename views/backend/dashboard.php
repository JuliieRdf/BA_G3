<?php
include '../../header.php';

?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tableau de contrôle de BlogArt</h1>
                <p>Bienvenue sur le tableau de bord!</p>
            </div>
            <div class="col-md-12">
                <h3>Paramètres</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Actions</th>
                            <th>Commentaires</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Status</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">Modifer</a>

                            </td>
                            <td>
                                <p>Statut de chaque personne inscrite sur le blog</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-primary">Modifer</a>

                            </td>
                            <td>Gérer les membres inscrits</td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-primary">Modifer</a>
                            </td>
                            <td>Vue globale des articles</td>
                        </tr>
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary">Modifer</a>

                            </td>
                            <td> Gestion des thématiques du blog</td>
                        </tr>
                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-primary">Modifer</a>

                            </td>
                            <td>Gestion des commentaires</td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary">Modifer</a>
                            </td>
                            <td>Gestion des likes</td>
                        </tr>
                        <tr>
                            <td>Mots clés</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary">Modifer</a>
                            </td>
                            <td>Gestion des mots clés</td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>

</div>