<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];

$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];

$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];

$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];

$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];

$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];

$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];



?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier le profil</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/members/edit.php' ?>" method="post">
                <div class="form-group">
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value="<?php echo ($numMemb); ?>" readonly="readonly">

                    <label for="prenomMemb">Changer <?php echo $prenomMemb ?> ?</label>
                    <input id="prenomMemb" class="form-control" type="text"value=<?php echo $prenomMemb ?> name="prenomMemb">
                    <label for="nomMemb">Changer <?php echo $nomMemb ?> ?</label>
                    <input id="nomMemb" class="form-control" type="text" value=<?php echo $nomMemb ?> name="nomMemb">
                    <label for="pseudoMemb">Changer <?php echo $pseudoMemb ?> ?</label>
                    <input id="pseudoMemb" class="form-control" type="text" value=<?php echo $pseudoMemb ?> name="pseudoMemb">
                    <label for="passMemb">Changer <?php echo $passMemb ?> ?</label>
                    <input id="passMemb" class="form-control" type="text" value=<?php echo $passMemb ?> name="passMemb">
                    <label for="eMailMemb">Changer <?php echo $eMailMemb ?> ?</label>
                    <input id="eMailMemb" class="form-control" type="text" value=<?php echo $eMailMemb ?> name="eMailMemb">
                    <label for="numStat">Changer <?php echo $numStat ?> ?</label>
                    <input id="numStat" class="form-control" type="text" value=<?php echo $numStat ?> name="numStat">


                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>