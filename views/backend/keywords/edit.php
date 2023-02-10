<?php



include '../../../header.php';


$numMotCle = $_GET['numMotCle'];


$libMotCle = sql_select("motcle", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];



?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Modifier le mot clé</h1>
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
    <!--Form to edit motcle-->

        <div class="row">
            <div class="col-1">
                <div class="deco-hori-g"></div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-8">
                <!--Form to create a new status-->
                <form action="<?php echo ROOT_URL . '/api/keywords/edit.php' ?>" method="post">
                    <div class="form-group " style="padding-top: 10%;">
                    <input id="numMotCle" class="form-control" style="display: none;" type="text" name="numMotCle" value="<?php echo ($numMotCle); ?>" readonly="readonly">
                        <label for="libMotCle">
                            <h3 class="nom-form">Nom du mot clé</h3>
                        </label>
                        <input id="libMotCle" class="form-control" type="text" name="libMotCle" required>
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
</body>