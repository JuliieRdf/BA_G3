<?php



include '../../../header.php';




$numStat = $_GET ['numStat'];


$libStat = sql_select("statut", "libStat", "numStat = $numStat")[0]['libStat'];


?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="tableau">Supprimer le statut</h2>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/status/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Voulez-vous vraiment supprimer le statut ?</label>
                    <input id="numStat" class="form-control" style="display: none;" type="text" name="numStat" value="<?php echo($numStat); ?>" readonly="readonly">
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo($libStat); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>