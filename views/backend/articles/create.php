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
            <label for="dtCreArt">
                <h1>date</h1>
            </label>
            <label for="libChapoArt">
                <h1>Chapeau</h1>
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
            <label for="exampleDataList">
                <h1>Datalist example</h1>
            </label>
        </div>
        <div class="col-7">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <div class="mb-5">
                        <input id="libTitrArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libTitrArt" minlength="1" maxlength="100">
                    </div>
                    <div class="mb-5">
                        <input id="dtCreArt" class="form-control form-control-lg" type="date" name="dtCreArt"> <!--DATE-->
                    </div>
                    <div class="mb-5">
                        <textarea cols="30" rows="4" id="libChapoArt" class="form-control"  placeholder="Maximum 500 caractères..."  type="text" name="libChapoArt"   minlength="1" maxlength="500"></textarea> <!--Chapo 500-->
                    </div>
                    <div class="mb-5">
                        <input id="libAccrochArt" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libAccrochArt"  minlength="1" maxlength="100"> <!--Acroche 100-->
                    </div>
                    <div class="mb-5">
                        <textarea cols="30" rows="9" id="parag1Art" class="form-control" placeholder="Maximum 1200 caractères..." type="text" name="parag1Art"  minlength="1" maxlength="1200"></textarea> <!--paragraphe 1200-->
                    </div>
                    <div class="mb-5">
                        <input id="libSsTitr1Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr1Art"  minlength="1" maxlength="100"> <!--sous-titre 100-->
                    </div>
                    <div class="mb-5">
                        <textarea cols="30" rows="9" placeholder="Maximum 1200 caractères..." id="parag2Art" class="form-control" type="text" name="parag2Art"  minlength="1" maxlength="1200"></textarea> <!--paragraphe 2 1200-->
                    </div>
                    <div class="mb-5">
                        <input id="libSsTitr2Art" class="form-control form-control-lg" placeholder="Maximum 100 caractères..." type="text" name="libSsTitr2Art"  minlength="1" maxlength="100"> <!--sous-titre 2 100-->
                    </div>
                    <div class="mb-5">
                        <textarea cols="30" rows="9" id="parag3Art" class="form-control" placeholder="Maximum 1200 caractères..." type="text" name="parag3Art"  minlength="1" maxlength="1200"></textarea> <!--paragraphe 3 1200-->
                    </div>
                    <div class="mb-5">
                        <textarea cols="30" rows="4" id="libConclArt" class="form-control" placeholder="Maximum 500 caractères..." type="text" name="libConclArt"  minlength="1" maxlength="500"></textarea> <!--conclusion 500-->
                    </div>
                    <div class="mb-5">
                        <input id="urlPhotArt" class="form-control form-control-lg" type="file" accept="image/*" name="urlPhotArt"> <!--Image-->
                    </div>
                    <div class="mb-5">
                        <input class="form-control form-control-lg" list="datalistOptions" id="exampleDataList" placeholder="Ecrire pour trouver..."> <!--CHOIX MULTIPLE-->
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                    <div class="mb-5">
                        <input id="numThem" class="form-control form-control-lg" placeholder="Seulement des chiffres..." type="number" name="numThem" > <!--numero du theme 4-->
                    </div>
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-1"></div>

    <?php include '../../../footer.php'; ?>
</body>

</html>