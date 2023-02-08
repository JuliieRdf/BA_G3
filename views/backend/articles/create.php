<head>
    <link rel="stylesheet" href="../../../source/css/crearticle.css">
</head>
<?php
include '../../../header.php';
?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Ajouter un nouvel article</h2>
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

<?php
sql_select('ARTICLE INNER JOIN MOTCLEARTICLE ON article.numArt = motclearticle.numArt');
sql_select('MOTCLE INNER JOIN MOTCLEARTICLE ON article.numMotCle = motclearticle.libMotCle');



sql_select('ARTICLE INNER JOIN THEMATIQUE ON article.numArt = thematique.numArt');


?>


    <!--Bootstrap form to create a new status-->


    <div class="row">
        <div class="col-1">
            <div class="deco-hori-g"></div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-8">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <div class="mb-5">
                        <label for="dtCreArt">
                            <h3 class="nom-form">Date</h3>
                        </label>
                        <input id="dtCreArt" class="form-control form-control-lg" type="date" name="dtCreArt"> <!--DATE-->
                    </div>
                    <div class="mb-5">
                        <label for="libTitrArt">
                            <h3 class="nom-form">Titre</h3>
                        </label>
                        <input id="libTitrArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libTitrArt" minlength="1" maxlength="100">
                    </div>
                   
                    <div class="mb-5">
                        <label for="libChapoArt">
                            <h3 class="nom-form">Chapeau</31>
                        </label>
                        <textarea cols="30" rows="4" id="libChapoArt" class="form-control" placeholder="Maximum 500 caractères..." type="text" name="libChapoArt" minlength="1" maxlength="500"></textarea> <!--Chapo 500-->
                    </div>
                    <div class="mb-5">
                        <label for="libAccrochArt">
                            <h3 class="nom-form">Accroche</h3>
                        </label>
                        <input id="libAccrochArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libAccrochArt" minlength="1" maxlength="100"> <!--Acroche 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag1Art">
                            <h3 class="nom-form">Paragraphe 1</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag1Art" class="form-control" placeholder="Maximum 1200 caractères..." type="text" name="parag1Art" minlength="1" maxlength="1200"></textarea> <!--paragraphe 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libSsTitr1Art">
                            <h3 class="nom-form">Sous Titre 1</h3>
                        </label>
                        <input id="libSsTitr1Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr1Art" minlength="1" maxlength="100"> <!--sous-titre 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag2Art">
                            <h3 class="nom-form">Paragraphe 2</h3>
                        </label>
                        <textarea cols="30" rows="9" placeholder="Maximum 1200 caractères..." id="parag2Art" class="form-control" type="text" name="parag2Art" minlength="1" maxlength="1200"></textarea> <!--paragraphe 2 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libSsTitr2Art">
                            <h3 class="nom-form">Sous Titre 2</h3>
                        </label>
                        <input id="libSsTitr2Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr2Art" minlength="1" maxlength="100"> <!--sous-titre 2 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag3Art">
                            <h3 class="nom-form">Paragraphe 3</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag3Art" class="form-control" placeholder="Maximum 1200 caractères..." type="text" name="parag3Art" minlength="1" maxlength="1200"></textarea> <!--paragraphe 3 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libConclArt">
                            <h3 class="nom-form">Conclusion</h3>
                        </label>
                        <textarea cols="30" rows="4" id="libConclArt" class="form-control" placeholder="Maximum 500 caractères..." type="text" name="libConclArt" minlength="1" maxlength="500"></textarea> <!--conclusion 500-->
                    </div>
                    <div class="mb-5">
                        <label for="urlPhotArt">
                            <h3 class="nom-form">Photo</h3>
                        </label>
                        <input id="urlPhotArt" class="form-control form-control-lg" type="file" accept="image/*" name="urlPhotArt"> <!--Image-->
                    </div>
                    <div class="mb-5">
                        <label for="numThem">
                            <h3 class="nom-form">Choix de la thématique</h3>
                        </label>
                        <select class="form-control form-control-lg" name="pets" id="numThem">
                            <option value="">Choisissez une thématique</option>
                            <option value="dog">1</option>
                            <option value="cat">L'acteur-clé</option>
                            <option value="hamster">Le mouvement émergeant</option>
                            <option value="parrot">L'insolite / le clin d'oeil</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="numMotCle">
                            <h3 class="nom-form">Mots clées</h3>
                        </label>
                        <input id="numMotCle" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="texte" name="numMotCle"> <!--numero du theme 4-->
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>

            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1 ">
            <div class="deco-hori-d"></div>
        </div>
    </div>

    <body>
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
        </div>



        <?php include '../../../footer.php'; ?>
    </body>

    </html>