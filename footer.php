<footer>
    <ul class="nav justify-content-center" style="padding: 1vh; background-color: #6D071A;">
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><img src="/source/images/Logo_blanc.png" alt="Logo Bordeaux déraille blanc" width="230px" height="auto"></a>
            </li>
        </div>
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link" href="views/backend/security/signup.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;">
                    <h3 class="typo-footer">S'inscrire</h3>
                </a>
            </li>
        </div>

        <?php if (isset($_SESSION['pseudo'])) { ?>

            <div class="col-3">
                <li class="nav-item">
                    <a class="nav-link" href="views/frontend/compte.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;">
                        <h3 class="typo-footer">Mon compte</h3>
                    </a>
                </li>
            </div>

        <?php } else { ?>

            <div class="col-3">
                <li class="nav-item">
                    <a class="nav-link" href="views/backend/security/login.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;">
                        <h3 class="typo-footer">Se connecter</h3>
                    </a>
                </li>
            </div>

        <?php } ?>


        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link" href="views/frontend/articles/mentions.php" style="padding-top: 3vh; color: #ffffff; text-decoration:underline;">
                    <h3 class="typo-footer">Mentions Légales</h3>
                </a>
            </li>
        </div>
    </ul>
</footer>

</html>