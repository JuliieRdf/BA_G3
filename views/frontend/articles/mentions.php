<?php require_once '../../../header.php'; ?>

<body>
    <div class="gutter container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1"><h1><br>Mentions Légales</h1></div>
            
            <div class="col-10"></div>
            
            <div class="col-2"></div>
            <div class="col-6">


            <h2><br><br><br>Propriétaire</h2>
                <p>Pixel Perfect<br>
1 Rue Jacques Ellul, 33800 Bordeaux<br>
07 62 20 09 14<br>
pixelperfect@gmail.com<br><br><br>
</p>
                <h2>Hébergeur</h2>
                <p>IUT Bordeaux Montaigne<br>
                1 rue Jacques Ellul 33080 Bordeaux Cedex France<br>
+33 5 57 12 20 44<br><br><br>
</p>
                <h2>Avertissement informationel</h2>
                <p>La consultation des articles de Bordeaux Déraille est gratuite et sans aucune garantie de la part de l’éditeur.
Les informations qui proviennent de sources extérieures ne sont pas garanties d’être sans erreurs.
Il en vient donc à la responsabilité  de l’utilisateur d’utiliser ses informations à ses risques et de les vérifier, et de son interprétation et des conséquences qui en découlent.<br><br><br></p>
<a href="rgpd.php"><h2>RGPD</h2></a>

            </div>
            <div class="col-4"></div>

        </div>
    </div>
    <?php include '../contact.php'; ?>
</body>

<footer>
    <ul class="nav justify-content-center" style="padding: 1vh; background-color: #6D071A;">
        <div class="col-4">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><img src="/source/images/Logo_blanc.png" alt="Logo Bordeaux déraille blanc" width="230px" height="auto"></a>
            </li>
        </div>
        <div class="col-4">
            <li class="nav-item">
                <a class="nav-link" href="views/backend/security/signup.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;"><h3 class="typo-footer">S'inscrire</h3></a>
            </li>
        </div>
        <div class="col-4">
            <li class="nav-item">
                <a class="nav-link" href="views/backend/security/login.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;"><h3 class="typo-footer">Se connecter</h3></a>
            </li>
        </div>

    </ul>
</footer>

</html>