<?php



include '../../../header.php';


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];

$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];

$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];

$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];

$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];

$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];

$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];



?>

<body>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="titre">Modifier un membre</h1>
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

                <!--Form to delete status-->
                <form action="<?php echo ROOT_URL . '/api/members/editM.php' ?>" method="post">
                    <div class="form-group" style="padding-top: 7%;">
                        <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value="<?php echo ($numMemb); ?>" readonly="readonly">

                        <label for="prenomMemb">
                            <h3 class="nom-form">Prénom</h3>
                        </label>
                        <input id="prenomMemb" class="form-control" type="text" value=<?php echo $prenomMemb ?> name="prenomMemb" minlength="1" maxlength="100">
                        <label for="nomMemb">
                            <h3 class="nom-form">Nom</h3>
                        </label>
                        <input id="nomMemb" class="form-control" type="text" value=<?php echo $nomMemb ?> name="nomMemb" minlength="1" maxlength="100">

                        <label for="eMailMemb">
                            <h3 class="nom-form">E-mail</h3>
                        </label>
                        <input id="eMailMemb" class="form-control" type="email" name="eMailMemb" value=<?php echo $eMailMemb ?>>


                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </div>
            </div>
            <div class="col-1"></div>
            <div class="col-1 ">
                <div class="deco-hori-d-member"></div>
            </div>

            </form>

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