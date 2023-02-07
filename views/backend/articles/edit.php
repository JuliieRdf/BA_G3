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



?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/articles/edit.php' ?>" method="post">
                <div class="form-group">
                    <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo ($numArt); ?>" readonly="readonly">

                    <label for="libTitrArt">Change <?php echo $libTitrArt ?> ?</label>
                    <input id="libTitrArt" class="form-control" type="text" value=<?php echo $libTitrArt ?> name="libTitrArt">

                    <label for="libChapoArt">Change <?php echo $libChapoArt ?> ?</label>
                    <input id="libChapoArt" class="form-control" type="text" value=<?php echo $libChapoArt ?> name="libChapoArt">

                    <label for="libAccrochArt">Change <?php echo $libAccrochArt ?> ?</label>
                    <input id="libAccrochArt" class="form-control" type="text" value=<?php echo $libAccrochArt ?> name="libAccrochArt">

                    <label for="parag1Art">Change <?php echo $parag1Art ?> ?</label>
                    <input id="parag1Art" class="form-control" type="text" value=<?php echo $parag1Art ?> name="parag1Art">

                    <label for="libSsTitr1Art">Change <?php echo $libSsTitr1Art ?> ?</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" value=<?php echo $libSsTitr1Art ?> name="libSsTitr1Art">

                    <label for="parag2Art">Change <?php echo $parag2Art ?> ?</label>
                    <input id="parag2Art" class="form-control" type="text" value=<?php echo $parag2Art ?> name="parag2Art">

                    <label for="libSsTitr2Art">Change <?php echo $libSsTitr2Art ?> ?</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" value=<?php echo $libSsTitr2Art ?> name="libSsTitr2Art">

                    <label for="parag3Art">Change <?php echo $parag3Art ?> ?</label>
                    <input id="parag3Art" class="form-control" type="text" value=<?php echo $parag3Art ?> name="parag3Art">

                    <label for="libConclArt">Change <?php echo $libConclArt ?> ?</label>
                    <input id="libConclArt" class="form-control" type="text" value=<?php echo $libConclArt ?> name="libConclArt">

                    <label for="urlPhotArt">Change <?php echo $urlPhotArt ?> ?</label>
                    <input id="urlPhotArt" class="form-control" type="text" value=<?php echo $urlPhotArt ?> name="urlPhotArt">

                    <label for="numThem">Change <?php echo $numThem ?> ?</label>
                    <input id="numThem" class="form-control" type="text" value=<?php echo $numThem ?> name="numThem">

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>