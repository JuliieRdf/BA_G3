<?php
include '../../../header.php';
?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">S'inscire</h1>
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

        <div class="row">
            <div class="col-1">
                <div class="deco-hori-g-member"></div>
            </div>
            <div class="col-3">
            </div>
            <div class="col-4">
                <form action="/api/members/createM.php" method="post">
                    <div class="form-group" style="padding-top: 10%;">
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
                        <label for="passMemb">
                            <h3 class="nom-form">Mot de passe (il faut MAJ, min, chiffre, charactere special et minimum - chractere)</h3>
                        </label>
                        <input id="passMemb" class="form-control" type="password" name="passMemb" minlength="6" maxlength="30" required pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}">
                    </div>
                    <div class="form-group mt-2" style="padding-top: 5%;">
                        <button type="submit" class="btn btn-success">Créer</button>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Déjà un compte ?</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
            <div class="col-1 ">
                <div class="deco-hori-d-member"></div>
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
    </div>