<?php

require_once 'header.php';

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

    <?php $articles = sql_select("ARTICLE INNER JOIN thematique ON article.numThem = thematique.numThem", "*", null, "dtCreArt DESC");


    ?>

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
                                <h3 class="theme">
                                    <?php echo $article['libThem'];


                                    ?></h3>
                                <div class="truncate">
                                    <h3 class="endbox"><?php echo $article['libChapoArt']; ?></h3>
                                </div>
                                <p><?php echo $article['dtCreArt']; ?></p>
                            </div>
                            <div class="cercle-d-a-left"></div>
                        </div>
                    <?php } ?>
                </section>
            </div>

            <div class="col-lg-3 ">
                <?php include 'views/frontend/colonne-d.php'; ?>
            </div>
        </div>
        <div class="row gx-12 responsive-col">
            <div class="col-lg-12" style="display:flex; justify-content: center; margin-top: 50px;">
                <?php include 'views/frontend/contact.php'; ?>

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
            setTimeout(showSlides, 10000); // Change image every 2 seconds
        }
        let slideIndex = 0;
        showSlides();
    </script>

</body>


</html>