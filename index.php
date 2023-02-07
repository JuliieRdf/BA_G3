<?php require_once 'header.php';

sql_connect();

//print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));


$lastT1 = sql_select("Article","*",null, "dtCreArt DESC", 3)[0]['libTitrArt'];
$lastT2 = sql_select("Article","*",null, "dtCreArt DESC", 3)[1]['libTitrArt'];
$lastT3 = sql_select("Article","*",null, "dtCreArt DESC", 3)[2]['libTitrArt'];

$lastP1 = sql_select("Article","*",null, "dtCreArt DESC", 3)[0]['urlPhotArt'];
$lastP2 = sql_select("Article","*",null, "dtCreArt DESC", 3)[1]['urlPhotArt'];
$lastP3 = sql_select("Article","*",null, "dtCreArt DESC", 3)[2]['urlPhotArt'];




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="source/css/index.css">

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<html>


<body>
    <div class="slideshow">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img class="slide" src="<?php echo($lastP1); ?>" style="width:100% ; height: 714px;">
                <div class="text"><?php echo($lastT1); ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img class="slide" src="<?php echo($lastP2); ?>" style="width:100%; height: 714px;">
                <div class="text"><?php echo($lastT2); ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img class="slide" src="<?php echo($lastP3); ?>" style="width:100%; height: 714px;">
                <div class="text"><?php echo($lastT3); ?></div>
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



    <div class="container-fluid" style="height:100px; padding-left:  4.16vw; padding-right: 4.16vw;">
        <div class="row gx-12 ">
            <div class="col-lg-1 ">
                <section class="home-article">
                    <div class="article-pres">
                        <div class="article-img"><img src="https://static.tvtropes.org/pmwiki/pub/images/splattim.jpg" alt="" ></div>
                        <div class="article-txt">
                            <a href="">
                                <h2 class="endbox">SPLAT! SPLAT!</h2>
                            </a>
                            <h3>YOU'RE A KID NOW!</h3>
                            <h3 class="endbox">YOU'RE A SQUID NOW!</h3>
                            <p>YOU'RE A KID NOW! YOU'RE A SQUID NOW!</p>
                            <p>YOU'RE A KID NOW! YOU'RE A SQUID NOW! YOU'RE A KID NOW!</p>
                        </div>
                    </div>
                    <div class="article-pres">
                        <div class="article-img"><img src="https://media.sketchfab.com/models/ae6b150e50044939aa6a6a6960b1c21d/thumbnails/76febbac5382473393cb5e61c43281cf/77b717aa515d452ea374dd108a230a0c.jpeg"
                            alt="" ></div>
                        <div class="article-txt">
                            <a href="">

                                <h2 class="endbox">INK IT ALL NOW!</h2>

                            </a>
                            <h3>UP THE WALL NOW!</h3>
                            <h3 class="endbox">DISAPPEAR, GOING BACK, THEN YOU TURN, THEN ATTACK!</h3>
                            <p>YOU'RE A SQUID NOW! RISE UP OFF THE INK! AMBUSH THIS DUDE!</p>
                            <p>SPLA-TA-TA-TA-TA-TA-TA-TA-TA-TA, SPLATOON!</p>
                        </div>
                    </div>
                    <div class="article-pres">
                        <div class="article-img"><img src="https://i1.sndcdn.com/artworks-000207092706-ze3fa8-t500x500.jpg" alt="" ></div>
                        <div class="article-txt">
                            <a href="">

                                <h2 class="endbox">DOVAHKIIN</h2>

                            </a>
                            <h3>DOVAHKIIN, NAAL OK ZIN LOS VAHRIIN</h3>
                            <h3 class="endbox">WAH DEIN VOHUL MAHFAERAAK AHST VAAL</h3>
                            <p>AHRK FIN NOROK PAAL GRAAN FOD NUST HON ZINDRO ZAAN</p>
                            <p>DOVAHKIIN, FAH HIN KOGAAN MU DRAAL!</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">
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
                        <button><img src="images/share.webp" alt="">
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
            <div class="col-lg-1 ">

            </div>
            <div class="col-lg-1 ">

            </div>

        </div>
        <div class="row gx-12 ">
            <div class="col-lg-12" style="display:flex; justify-content: center; margin-top: 50px;">
            <section class="contact">
                <h3 class="contact">CONTACTEZ NOUS</h3>
                <form class="contacter">
                    <div class="contacter_b">
                    <label for="nom" >Nom:</label><br>
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
            <footer>
    <ul class="nav justify-content-center" style="background-color: #6D071A; ">
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><img src="/source/images/Logo_blanc.png" alt="Logo Bordeaux d'éraille blanc" width="230px" height="auto"></a>
            </li>
        </div>
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; text-decoration:underline;">S'inscire</a>
            </li>
        </div>
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; text-decoration:underline;">Se connecter</a>
            </li>
        </div>
        <div class="col-3">
            <li class="nav-item">
                <a class="nav-link" href="crearticle.php" style="color: #ffffff; text-decoration:underline;">Mention Légal</a>
            </li>
        </div>
    </ul>

</footer>
    </div>







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







