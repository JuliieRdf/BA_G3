<?php



include '../../../header.php';


$numThem = $_GET ['numThem'];



$libThem = sql_select("thematique", "libThem", "numThem = $numThem")[0]['libThem'];


?>
<body>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="titre">Modifer la thématique</h1>
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
            <!--Form to delete status-->
            
            <form action="<?php echo ROOT_URL . '/api/thematiques/edit.php' ?>" method="post">
            <div class="form-group " style="padding-top: 10%;">
            <input id="numThem" class="form-control" style="display: none;" type="text" name="numThem" value="<?php echo ($numThem); ?>" readonly="readonly">
                    <label for="libThem"><h3 class="nom-form">Nom de la thématique</h3></label>
                    <input id="libThem" class="form-control" type="text" name="libThem" required>
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

