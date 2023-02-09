<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numCom = $_GET ['numCom'];



$libCom = sql_select("comment", "libCom","numCom = $numCom")[0]['libCom'];




?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer un commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/comment/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Supprimer ce commentaire?</label>
                    <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value="<?php echo($numCom); ?>" readonly="readonly">
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div>