<?php



include '../../../header.php';




$numMotCle = $_GET ['numMotCle'];

$libMotCle = sql_select("motcle", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];


?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="tableau">Supprimer un mot clé</h2>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Supprimer ce mot clé?</label>
                    <input id="numMotCle" class="form-control" style="display: none;" type="text" name="numMotCle" value="<?php echo($numMotCle); ?>" readonly="readonly">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div>