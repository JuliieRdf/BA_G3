<?php
include '../../../header.php';

$statut = sql_select("statut", "*");



?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Créer un membre</h1>
        </div>
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
            <div class="deco-hori-g-member"></div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-8">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/members/createA.php' ?>" method="post">
                <div class="form-group" style="padding-top: 3%;">
                    <label for="prenomMemb">
                        <h3 class="nom-form">Prénom</h3>
                    </label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" minlength="1" maxlength="100" required>
                    <label for="nomMemb">
                        <h3 class="nom-form">Nom</h3>
                    </label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" minlength="1" maxlength="100" required>
                    <label for="pseudoMemb">
                        <h3 class="nom-form">Pseudonyme (non modifiable)</h3>
                    </label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" minlength="6" maxlength="30" required>
                    <label for="eMailMemb">
                        <h3 class="nom-form">E-mail</h3>
                    </label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb" required>

                    <label for="confirmeMailMemb">
                        <h3 class="nom-form">Cofirmer l'E-mail</h3>
                    </label>
                    <input id="confirmeMailMemb" class="form-control" type="email" name="confirmeMailMemb" required>

                    <label for="passMemb">
                        <h3 class="nom-form">Mot de passe <i style="font-size: 20px;">(il faut minimum une majuscule, une minuscule, un chiffre, un charactère special et plus de 6 charactères) </i> </h3>
                    </label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" minlength="6" maxlength="30" required pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}">

                    <label name="confirmpassMemb" for="confirmpassMemb">
                    <h3  class="nom-form">Confirmer le mot de passe</h3>
                    </label>
                    <input id="confirmpassMemb" class="form-control" type="password" name="confirmpassMemb" minlength="6" maxlength="30" required pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}">

                    <div class="mb-5">
                        <label for="numStat">
                            <h3 class="nom-form">Choix du statut</h3>
                        </label>
                        <select class="form-control form-control-lg" name="numStat" id="numStat" required>
                            <option>Choisissez une statut</option>
                            <?php foreach ($statut as $stat) { ?>
                                <option value="<?php echo $stat['numStat']; ?>">
                                <?php echo $stat['libStat'];
                            } ?></option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Créer</button>
                    </div>
                    </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-1">
            <div class="deco-hori-d-member"></div>
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