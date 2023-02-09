<?php
include '../../../header.php';

?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Se connecter</h1>
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
            <div class="deco-hori-g-login"></div>
        </div>
        <div class="col-3">
        </div>
        <div class="col-4">

            <form action="/api/security/login.php" method="post">
                <div class="form-group" style="padding-top: 4%;">
                    <label for="pseudoMemb">
                        <h3 class="nom-form">Pseudonyme</h3>
                    </label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" minlength="6" maxlength="30" required>
                    <label for="passMemb">
                        <h3 class="nom-form">Mot de passe (il faut MAJ, min, chiffre, charactere special et minimum - chractere)</h3>
                    </label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" minlength="6" maxlength="30" required   pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}" >
                    <div class="mb-5">
                    </div>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Se connecter </button>

                </div>
            </form>

            <form action="/views/backend/security/signup.php" method="post">

                    
                    <div class="form-group mt-2">
                        <a href="../security/signup.php" type="submit" class="btn btn-primary">Créer un compte</a>
                    </div>
                </div>
            </form>
        
        <div class="col-3"></div>
        <div class="col-1 ">
            <div class="deco-hori-d-login"></div>
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
