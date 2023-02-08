
<?php
include '../../../header.php';

?>
<body>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="titre">Créer un nouveau commentaire</h>
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
            <form action="<?php echo ROOT_URL . '/api/comment/create.php' ?>" method="post">
                <div class="form-group " style="padding-top: 10%;">
                    <label for="libCom"><h3 class="nom-form">Commentaire</h3></label>
                    <input id="libCom" class="form-control" type="text" name="libCom" required>
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