<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numThem = $_GET ['numThem'];
//$numStat = sql_select("STATUT","numStat")["4"]['numStat'];


$libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];


?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Thematque</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/thematiques/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">libThem</label>
                    <input id="numThem" class="form-control" style="display: none;" type="text" name="numThem" value="<?php echo($numThem); ?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>