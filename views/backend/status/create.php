<head>
    <link rel="stylesheet" href="../../../source/css/formgeneral.css">
</head>
<?php
include '../../../header.php';

?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Créer un nouveau statut</h1>
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
            <form action="<?php echo ROOT_URL . '/api/status/create.php' ?>" method="post">
                <div class="form-group " style="padding-top: 10%;">
                    <label for="libStat">
                        <h3 class="nom-form">Nom du nouveau statut</h3>
                    </label>
                    <input id="libStat" class="form-control" type="text" name="libStat">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1 ">
            <div class="deco-hori-d"></div>
        </div>
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