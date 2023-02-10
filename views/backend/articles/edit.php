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

$libTitrArt = sql_select("article", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];

$libChapoArt = sql_select("article", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];

$libAccrochArt = sql_select("article", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];

$parag1Art = sql_select("article", "parag1Art", "numArt = $numArt")[0]['parag1Art'];

$libSsTitr1Art = sql_select("article", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];

$parag2Art = sql_select("article", "parag2Art", "numArt = $numArt")[0]['parag2Art'];

$libSsTitr2Art = sql_select("article", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];

$parag3Art = sql_select("article", "parag3Art", "numArt = $numArt")[0]['parag3Art'];

$libConclArt = sql_select("article", "libConclArt", "numArt = $numArt")[0]['libConclArt'];


$numThem = sql_select("article", "numThem", "numArt = $numArt")[0]['numThem'];


$thems = sql_select('thematique', '*');


$Mots = sql_select('motcle', '*');



?>


<?php 



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

                    <div class="mb-5">
                        <label for="libTitrArt">
                            <h3 class="nom-form">Titre</h3>
                        </label>
                        <input id="libTitrArt" class="form-control form-control-lg" type="text" name="libTitrArt" minlength="1" maxlength="100" value="<?php echo $libTitrArt ?>" required >
                    </div>

                    <div class="mb-5">
                        <label for="libChapoArt">
                            <h3 class="nom-form">Chapeau</h3>
                        </label>
                        <textarea cols="30" rows="4" id="libChapoArt" class="form-control" type="text" name="libChapoArt" minlength="1" maxlength="500" required><?php echo $libChapoArt ?></textarea> <!--Chapo 500-->
                    </div>

                    <div class="mb-5">
                        <label for="libAccrochArt">
                            <h3 class="nom-form">Accroche</h3>
                        </label>
                        <input id="libAccrochArt" class="form-control form-control-lg" type="text" name="libAccrochArt" minlength="1" maxlength="100" required value="<?php echo $libAccrochArt ?>" > <!--Acroche 100-->
                    </div>


                    <div class="mb-5">
                        <label for="parag1Art">
                            <h3 class="nom-form">Paragraphe 1</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag1Art" class="form-control" type="text" name="parag1Art" minlength="1100" maxlength="3000" required><?php echo $parag1Art ?></textarea> <!--paragraphe 1200-->
                    </div>

                    <div class="mb-5">
                        <label for="libSsTitr1Art">
                            <h3 class="nom-form">Sous Titre 1</h3>
                        </label>
                        <input id="libSsTitr1Art" class="form-control form-control-lg" type="text" name="libSsTitr1Art" minlength="1" maxlength="100" required value="<?php echo $libSsTitr1Art ?>"> <!--sous-titre 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag2Art">
                            <h3 class="nom-form">Paragraphe 2</h3>
                        </label>
                        <textarea cols="30" rows="9"  id="parag2Art" class="form-control" type="text" name="parag2Art" minlength="1200" maxlength="3000" required><?php echo $parag2Art ?></textarea> <!--paragraphe 2 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libSsTitr2Art">
                            <h3 class="nom-form">Sous Titre 2</h3>
                        </label>
                        <input id="libSsTitr2Art" class="form-control form-control-lg" type="text" name="libSsTitr2Art" minlength="1" maxlength="100" required value="<?php echo $libSsTitr2Art ?>"> <!--sous-titre 2 100-->
                    </div>
                    <div class="mb-5">
                        <label for="parag3Art">
                            <h3 class="nom-form">Paragraphe 3</h3>
                        </label>
                        <textarea cols="30" rows="9" id="parag3Art" class="form-control"  type="text" name="parag3Art" minlength="1200" maxlength="3000" required><?php echo $parag3Art ?></textarea> <!--paragraphe 3 1200-->
                    </div>
                    <div class="mb-5">
                        <label for="libConclArt">
                            <h3 class="nom-form">Conclusion</h3>
                        </label>
                        <textarea cols="30" rows="4" id="libConclArt" class="form-control" type="text" name="libConclArt" minlength="1" maxlength="500" required><?php echo $libConclArt ?></textarea> <!--conclusion 500-->
                    </div>
                    
                    
                    <div class="mb-5">
                        <label for="numThem">
                            <h3 class="nom-form">Choix de la thématique</h3>
                        </label>
                        <select class="form-control form-control-lg" name="numThem" id="numThem" mmrequired>
                            <option>Choisissez une thématique</option>
                            <?php foreach ($thems as $them) { ?>
                                <option value="<?php echo $them['numThem'];  ?>"> <?php
                                                    echo $them['libThem'];
                                                    } ?></option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <fieldset>
                            <legend>
                                <h3 class="nom-form" >Choix des mots clés</h3>
                            </legend><?php foreach ($Mots as $Mot) { ?>
                                <div>
                                    <label > 
                                        <input name="numMotCle[]" value="<?php echo $Mot['numMotCle']; ?>" style="margin-right: 10px;" type="checkbox"><?php echo $Mot['libMotCle'];  ?>
                                    </label>
                                </div>
                            <?php } ?>
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