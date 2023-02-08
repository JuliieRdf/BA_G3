 <?php
  include '../../../header.php';
  ?>
  <body>
 <?php
 $numArts = $_GET ['numArt'];
  $pageart = sql_select("ARTICLE", "*")["numArt= $numArts"]; ?>

 <p class="date"><?php echo ($pageart["dtCreArt"]); ?></p>
 <h1> <?php echo ($pageart["libTitrArt"]); ?></h1>
 <p> <?php echo ($pageart["libChapoArt"]); ?></p>
 <div class="article-img"><img src=<?php echo $pageart['urlPhotArt']; ?> alt="Photo de l'article" ></div>
 <p> <?php echo ($pageart["libAccrochArt"]); ?></p>
 <p><?php echo ($pageart["parag1Art"]); ?></p>
 <h2><?php echo ($pageart["libSsTitr1Art"]); ?></h2>
 <p> <?php echo ($pageart["parag2Art"]); ?></p>
 <h2><?php echo ($pageart["libSsTitr2Art"]); ?></h2>
 <p> <?php echo ($pageart["parag3Art"]); ?></p>
 <p> <?php echo ($pageart["libConclArt"]); ?></p>



 </body>
 <?php include '../../../footer.php'; ?>
 </html>