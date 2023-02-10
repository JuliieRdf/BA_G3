<?php



include '../../../header.php';


$numThem = $_GET ['numThem'];

$libThem = sql_select("thematique", "libThem", "numThem = $numThem")[0]['libThem'];


?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="tableau">Supprimer une thématique</h2>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Supprimer cette thématique?</label>
                    <input id="numThem" class="form-control" style="display: none;" type="text" name="numThem" value="<?php echo($numThem); ?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo($libThem); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
