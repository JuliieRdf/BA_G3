<head>
    <link rel="stylesheet" href="../../../source/css/crearticle.css">
</head>
<?php
include '../../../header.php';
?>

<body>
    <div class="row">
        <div class="col-3">
            <div class="deco-verti">
                <div class="cercle-g"></div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="titre">Ajouter un nouvel article</h2>
        </div>
        <div class="col-3">
            <div class="deco-verti">
                <div class="cercle-d"></div>
            </div>
        </div>
    </div>

    <!--Bootstrap form to create a new status-->


        <div class="row">
            <div class="col-1">
                <div class="deco-hori"></div>
            </div>
            <div class="col-md-3">
                <label for="libTitrArt">
                    <h1>Titre</h1>
                </label>
                <label for="libChapoArt">
                    <h1>Chapeau</h1>
                </label>
                <label for="libAccrochArt">
                    <h1>Accroche</h1>
                </label>
                <label for="parag1Art">
                    <h1>Paragraphe 1</h1>
                </label>
                <label for="libSsTitr1Art">
                    <h1>Sous Titre 1</h1>
                </label>
                <label for="parag2Art">
                    <h1>Paragraphe 2</h1>
                </label>
                <label for="libSsTitr2Art">
                    <h1>Sous Titre 2</h1>
                </label>
                <label for="parag3Art">
                    <h1>Paragraphe 3</h1>
                </label>
                <label for="libConclArt">
                    <h1>Conclusion</h1>
                </label>
                <label for="urlPhotArt">
                    <h1>Photo</h1>
                </label>
                <label for="numThem">
                    <h1>Numéro Thème</h1>
                </label>
            </div>
            <div class="col-7">
                <!--Form to create a new status-->
                <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                    <div class="form-group">
                        <input id="libTitrArt" class="form-control" placeholder="Recherche..." type="text" name="libTitrArt">
                        <input id="libChapoArt" class="form-control" placeholder="Recherche..." type="text" name="libChapoArt">
                        <input id="libAccrochArt" class="form-control" placeholder="Recherche..." type="text" name="libAccrochArt">
                        <input id="parag1Art" class="form-control" placeholder="Recherche..." type="text" name="parag1Art">
                        <input id="libSsTitr1Art" class="form-control" placeholder="Recherche..." type="text" name="libSsTitr1Art">
                        <input id="parag2Art" class="form-control" placeholder="Recherche..." type="text" name="parag2Art">
                        <input id="libSsTitr2Art" class="form-control" placeholder="Recherche..." type="text" name="libSsTitr2Art">
                        <input id="parag3Art" class="form-control" placeholder="Recherche..." type="text" name="parag3Art">
                        <input id="libConclArt" class="form-control" placeholder="Recherche..." type="text" name="libConclArt">
                        <input id="urlPhotArt" class="form-control" placeholder="Recherche..." type="text" name="urlPhotArt">
                        <input id="numThem" class="form-control" placeholder="Recherche..." type="text" name="numThem">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    <div class="col-1"></div>

    <?php include '../../../footer.php'; ?>
</body>

</html>