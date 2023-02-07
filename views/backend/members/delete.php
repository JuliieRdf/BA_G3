<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET ['numMemb'];




$prenomMemb = sql_select("MEMBRE", "prenomMemb","numMemb = $numMemb")[0]['prenomMemb'];






?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">prenomMemb</label>
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value="<?php echo($numMemb); ?>" readonly="readonly">
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm Deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>