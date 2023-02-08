<head>
    <link rel="stylesheet" href="../../../source/css/creatmember.css">
</head>
<?php
include '../../../header.php';

?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Créer un membre</h1>
        </div>
        <div class="col-8">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/members/createA.php' ?>" method="post">
                <div class="form-group ">
                    <label for="prenomMemb">
                        <h3 class="nom-form">Prénom</h3>
                    </label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" minlength="1" maxlength="100">
                    <label for="nomMemb">
                        <h3 class="nom-form">Nom</h3>
                    </label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" minlength="1" maxlength="100">
                    <label for="pseudoMemb">
                        <h3 class="nom-form">Pseudonyme (non modifiable)</h3>
                    </label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" minlength="6" maxlength="30">
                    <label for="eMailMemb">
                        <h3 class="nom-form">E-mail</h3>
                    </label>
                    <input id="eMailMemb" class="form-control" type="email" pattern=".+@globex\.com" name="eMailMemb">
                    <label for="passMemb">
                        <h3 class="nom-form">Mot de passe</h3>
                    </label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" minlength="6" maxlength="30">
                    <div class="mb-5">
                        <label for="statue">
                            <h3 class="nom-form">Choix du statue</h3>
                        </label>
                        <select class="form-control form-control-lg" name="pets" id="statue">
                            <option value="">Choisissez un statue</option>
                            <option value="dog">membre</option>
                            <option value="cat">admin</option>
                            <option value="hamster">jsp</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
            </form>
        </div>
    </div>



    <?php include '../../../footer.php'; ?>








