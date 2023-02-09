<?php


/*

libTitrArt
libChapoArt
libAccrochArt
parag1Art
libSsTitr1Art
parag2Art
libSsTitr2Art
parag3Art
libConclArt
urlPhotArt
numThem
*/

include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numArt = $_GET['numArt'];

$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];

$libChapoArt = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];

$libAccrochArt = sql_select("ARTICLE", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];

$parag1Art = sql_select("ARTICLE", "parag1Art", "numArt = $numArt")[0]['parag1Art'];

$libSsTitr1Art = sql_select("ARTICLE", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];

$parag2Art = sql_select("ARTICLE", "parag2Art", "numArt = $numArt")[0]['parag2Art'];

$libSsTitr2Art = sql_select("ARTICLE", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];

$parag3Art = sql_select("ARTICLE", "parag3Art", "numArt = $numArt")[0]['parag3Art'];

$libConclArt = sql_select("ARTICLE", "libConclArt", "numArt = $numArt")[0]['libConclArt'];

$urlPhotArt = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];

$numThem = sql_select("ARTICLE", "numThem", "numArt = $numArt")[0]['numThem'];





$members = sql_select('membre INNER JOIN statut ON membre.numStat = statut.numStat', "*");


$MotCleArt = sql_select('ARTICLE INNER JOIN Motclearticle ON article.numArt = motclearticle.numArt ');



$libMotCles = sql_select('MotClearticle INNER JOIN MotCle ON motClearticle.nummotcle = MotCle.nummotcle', "*");









?>




<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Modifier un article</h1>
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

    <!--Bootstrap form to deletew status-->
    <div class="row">
        <div class="col-1">
            <div class="deco-hori-g-create"></div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-8">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/articles/edit.php' ?>" method="post">
                <div class="form-group">
                    <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo ($numArt); ?>" readonly="readonly">

                    <label for="libTitrArt">Changer <?php echo $libTitrArt ?> ?</label>
                    <input id="libTitrArt" class="form-control" type="text" value=<?php echo $libTitrArt ?> name="libTitrArt">

                    <label for="libChapoArt">Changer <?php echo $libChapoArt ?> ?</label>
                    <input id="libChapoArt" class="form-control" type="text" value=<?php echo $libChapoArt ?> name="libChapoArt">

                    <label for="libAccrochArt">Changer <?php echo $libAccrochArt ?> ?</label>
                    <input id="libAccrochArt" class="form-control" type="text" value=<?php echo $libAccrochArt ?> name="libAccrochArt">

                    <label for="parag1Art">Changer <?php echo $parag1Art ?> ?</label>
                    <input id="parag1Art" class="form-control" type="text" value=<?php echo $parag1Art ?> name="parag1Art">

                    <label for="libSsTitr1Art">Changer <?php echo $libSsTitr1Art ?> ?</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" value=<?php echo $libSsTitr1Art ?> name="libSsTitr1Art">

                    <label for="parag2Art">Changer <?php echo $parag2Art ?> ?</label>
                    <input id="parag2Art" class="form-control" type="text" value=<?php echo $parag2Art ?> name="parag2Art">

                    <label for="libSsTitr2Art">Changer <?php echo $libSsTitr2Art ?> ?</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" value=<?php echo $libSsTitr2Art ?> name="libSsTitr2Art">

                    <label for="parag3Art">Changer <?php echo $parag3Art ?> ?</label>
                    <input id="parag3Art" class="form-control" type="text" value=<?php echo $parag3Art ?> name="parag3Art">

                    <label for="libConclArt">Changer <?php echo $libConclArt ?> ?</label>
                    <input id="libConclArt" class="form-control" type="text" value=<?php echo $libConclArt ?> name="libConclArt">

                    <label for="urlPhotArt">Changer <?php echo $urlPhotArt ?> ?</label>
                    <input id="urlPhotArt" class="form-control" type="text" value=<?php echo $urlPhotArt ?> name="urlPhotArt">

                    <label for="numThem">Changer <?php echo $numThem ?> ?</label>
                    <input id="numThem" class="form-control" type="text" value=<?php echo $numThem ?> name="numThem">

                    <div class="mb-5">
                        <fieldset>
                            <legend>
                                <h3 class="nom-form">Choix des mots clés</h3>
                            </legend>

                            <div>

                                <?php foreach ($MotCleArt as $MotCle) {
                                ?>


                                    <label for="<?php
                                                $MotCle['numMotCle'];
                                            };
                                                ?>"><input type="checkbox" name="" id="" required checked>
                                        <h3 class="nom-form">
                                            <?php foreach ($libMotCles as $libMotCle) {
                                                echo $libMotCle['libMotCle'];
                                            } ?></h3><br>
                                    </label>
                            </div>

                        </fieldset>
                    </div>


                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1 ">
            <div class="deco-hori-d-create"></div>
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
    </div>



</body>