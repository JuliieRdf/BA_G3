<?php
include '../../../header.php';




//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */




?>


<div class="login" class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Se Connecter</h1>
        </div>
        <div class="col-md-12">
            <form action="/api/security/login.php" method="post">
                <div class="form-group">

                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">

                    <label for="passMemb">Password</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            </form>

            <form action="/views/backend/security/signup" method="post">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>