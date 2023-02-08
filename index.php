<?php require_once 'header.php';

sql_connect();

//print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));


$lastT1 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[0]['libTitrArt'];  //Séletionne le dernier titre
$lastT2 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[1]['libTitrArt']; // Sélectionne l'avant dernier titre
$lastT3 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[2]['libTitrArt'];  // Sélectionne l'avant avant dernier titre

$lastP1 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[0]['urlPhotArt']; //Séletionne la dernière photo
$lastP2 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[1]['urlPhotArt']; //Séletionne l'avant dernière photo
$lastP3 = sql_select("Article", "*", null, "dtCreArt DESC", 3)[2]['urlPhotArt']; // Sélectionne l'avant avant dernière photo


?>

<html>


<body>
    <div class="slideshow">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img class="slide" src="<?php echo ($lastP1); ?>" style="width:100% ; height: 714px;">
                <div class="text"><?php echo ($lastT1); ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img class="slide" src="<?php echo ($lastP2); ?>" style="width:100%; height: 714px;">
                <div class="text"><?php echo ($lastT2); ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img class="slide" src="<?php echo ($lastP3); ?>" style="width:100%; height: 714px;">
                <div class="text"><?php echo ($lastT3); ?></div>
            </div>

        </div>
        <br>

        <div style="text-align:center; 
transform: translate(0px,-50px);">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>

    <section class="slide-mobile">
        <img src="<?php echo ($lastP1); ?>" alt="" class="bande-mobile">
        <h2><?php echo ($lastT1); ?></h2>
        <p>DATE</p>

    </section>

    <?php $articles = sql_select("ARTICLE", "*", null, "dtCreArt DESC"); ?>

    <div class="container-fluid" style="padding-left:  4.16vw; padding-right: 4.16vw;">
        <div class="row gx-12 ">
            <div class="col-lg-9 ">
                <section class="home-article">
                    <?php foreach ($articles as $article) { ?>
                        <div class="article-pres">

                            <div class="article-img"><img src=<?php echo $article['urlPhotArt']; ?> alt="Photo de l'article"></div>
                            <div class="article-txt">
                                <a href="views/frontend/articles/article.php?numArt=<?php echo $article['numArt']; ?>">
                                    <h2 class="endbox"><?php echo $article['libTitrArt']; ?></h2>
                                </a>
                                <h3><?php echo $article['numThem']; ?></h3>
                                <h3 class="endbox"><?php echo $article['libChapoArt']; ?></h3>
                                <p><?php echo $article['dtCreArt']; ?></p>
                            </div>

                        </div>
                    <?php } ?>
                </section>
            </div>

            <div class="col-lg-3 ">
                <section class="colonne-d">
                    <div class="inscription">
                        <form class="inscription-form" action="">

                            <label for="nom" style="font-family: 'Inter' ; font-size: 26px;">S'inscrire:</label><br>
                            <input type="text" id="text" name="text" class="inscription-txt" placeholder="E-Mail"><br>
                            <input type="submit" value="Poster" class="inscription-i">
                        </form>
                    </div>
                    <div class="actus">
                        <h3 class="actus-titl">Actus:</h3>
                        <a href="http://transporturbain.canalblog.com/archives/2023/01/05/39769159.html">
                            <h4>Les principales nouveautés de 2023 <br> (de transporturbain)</h4>
                        </a>
                        <p class="actus-p">L'année nouvelle sera l'occasion d'inaugurer quelques développements des
                            réseaux urbains dans les principales agglomérations...</p>

                        <a href="http://transporturbain.canalblog.com/archives/2023/01/05/39769159.html">
                            <h4>Premiers scooters libre service <br> (de quoifaireabordeaux.com) </h4>
                        </a>
                        <p class="actus-p">Exit les bouchons, le scooter en libre service est en passe de devenir le
                            moyen de transport préféré des Bordelais...</p>
                    </div>

                    <div class="share">
                        <button><img src="source/images/share.webp" alt="">
                            <p>Partagez</p>
                        </button>
                    </div>

                    <div class="admin-article">
                        <button>
                            <p>Créez un article</p>
                        </button>
                    </div>
                </section>
            </div>
        </div>
        <div class="row gx-12 responsive-col">
            <div class="col-lg-12" style="display:flex; justify-content: center; margin-top: 50px;">
                <section class="contact">
                    <h3 class="contact">CONTACTEZ NOUS</h3>
                    <form class="contacter">
                        <div class="contacter_b">
                            <label for="nom" class="contact-top">Nom:</label><br>
                            <input type="text" id="text" name="text"><br>
                            <label for="prenom">Prénom:</label><br>
                            <input type="text" id="prenom" name="prenom"><br>
                            <label for="email">E-Mail:</label><br>
                            <input type="text" id="email" name="email"><br>
                            <label for="message">Message:</label><br>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="Poster" class="poster">
                    </form>


                </section>

            </div>
        </div>




    </div>

    <?php require_once 'footer.php'; ?>


    <script>
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 1500); // Change image every 2 seconds
        }
        let slideIndex = 0;
        showSlides();
    </script>

</body>


</html>