<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numCom = $_GET['numCom'];

$libTitrArt = sql_select("comment", "libCom", "numCom = $numCom")[0]['libCom'];





?>

<body>
    <!--Bootstrap form to deletew status-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Modifer un commentaire</h1>
            </div>
            <div class="col-md-12">
                <!--Form to delete status-->
                <form action="<?php echo ROOT_URL . '/api/comment/edit.php' ?>" method="post">
                    <div class="form-group">
                        <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value="<?php echo ($numCom); ?>" readonly="readonly">

                        <label for="libCom">Changer <?php echo $libCom ?> ?</label>
                        <input id="libCom" class="form-control" type="text" value=<?php echo $libCom ?> name="libCom">




                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>