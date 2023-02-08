<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveaux mot clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/Keywords/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libNotCle">Nom du mot clé</label>
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>