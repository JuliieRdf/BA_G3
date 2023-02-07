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
<html>

<h1>HEYYy</h1>
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











<?php require_once 'footer.php'; ?>