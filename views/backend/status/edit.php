<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numStat = $_GET['numStat'];
//$numStat = sql_select("STATUT","numStat")["4"]['numStat'];

$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];

?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Modifier un statut</h1>
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
    <!--Bootstrap form to create a new status-->

    <div class="row">
        <div class="col-1">
            <div class="deco-hori-g"></div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-8">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/edit.php' ?>" method="post">
                <div class="form-group " style="padding-top: 10%;">
                    <input id="numStat" class="form-control" style="display: none;" type="text" name="numStat" value="<?php echo ($numStat); ?>" readonly="readonly">
                    <h3 class="nom-form">Nom du nouveau statut</h3>
                    </label>
                    <input id="libStat" class="form-control" type="text" name="libStat" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1 ">
            <div class="deco-hori-d"></div>
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
    <?php include '../../../footer.php'; ?>
    </div>
    </div>
</body>