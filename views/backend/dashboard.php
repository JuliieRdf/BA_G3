<?php
include '../../header.php';

?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Tableau de contrôle de BlogArt</h1>
            <p style="text-align: center;">Bienvenue sur le tableau de bord!</p>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="deco-verti-haut">
                <div class="cercle-g"></div>
            </div>
        </div>
        <div class="col-6">
        </div>
        <div class="col-3">
            <div class="deco-verti-haut">
                <div class="cercle-d"></div>
            </div>
        </div>
    </div>


    <!--Bootstrap admin dashboard template-->
    <div class="row">
        <div class="col-1">
            <div class="deco-hori-g-dash"></div>
        </div>
        <div class="col-2">
        </div>

        <div class="col-2">
        <label for="members" style="padding-top: 10%;">
                <h3 class="nom-form">Gérer les membres inscrits</h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="members" name="members" href="/views/backend/members/list.php" class="btn btn-primary">Modifier</a>
            <label for="status" style="padding-top: 10%;">
                <h3 class="nom-form">Statut des inscrits du blog</h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="status" name="status" href="/views/backend/status/list.php" class="btn btn-primary">Modifier</a>
            <label for="thematiques" style="padding-top: 10%;">
                <h3 class="nom-form">Géres thématiques du blog</h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="thematiques" name="thematiques" href="/views/backend/thematiques/list.php" class="btn btn-primary">Modifier</a>
        </div>

<div class="col-2"></div>

        <div class="col-2">
            <label for="keyword" style="padding-top: 10%;">
                <h3 class="nom-form">Gestions des mots clés </h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="keyword" name="libThem" href="/views/backend/keywords/list.php" class="btn btn-primary">Modifier</a>
            
            <label for="articles" style="padding-top: 10%;">
                <h3 class="nom-form" >Vue globale des articles</h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="articles" name="articles" href="/views/backend/articles/list.php" class="btn btn-primary">Modifier</a>

            <label for="comments" style="padding-top: 10%;">
                <h3 class="nom-form">Gérér des commentaires</h3>
            </label>
            <a style="margin-left: 10%; padding:3%;" id="comments" name="comments" href="/views/backend/comments/list.php" class="btn btn-primary">Modifier</a>
            
        </div>
        <div class="col-2"></div>

        <div class="col-1">
            <div class="deco-hori-d-dash"></div>
        </div>
    </div> 




    <div class="row">
        <div class="col-3">
            <div class="deco-verti-bas">
                <div class="cercle-g"></div>
            </div>
        </div>
        <div class="col-6"></div>
        <div class="col-3">
            <div class="deco-verti-bas">
                <div class="cercle-d"></div>
            </div>
        </div>

</body>