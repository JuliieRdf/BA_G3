 <?php
  include '../../../header.php';
  ?>
  <body>
 <?php
 $numArts = $_GET['numArt'];
  $pageart = sql_select("ARTICLE", "*","numArt=$numArts");
?>
 <p class="date"><?php echo ($pageart[0]["dtCreArt"]); ?></p>
 <h1> <?php echo ($pageart[0]["libTitrArt"]); ?></h1>
 <p> <?php echo ($pageart[0]["libChapoArt"]); ?></p>
 <div class="article-img"><img src=<?php echo $pageart[0]['urlPhotArt']; ?> alt="Photo de l'article" ></div>
 <p> <?php echo ($pageart[0]["libAccrochArt"]); ?></p>
 <p><?php echo ($pageart[0]["parag1Art"]); ?></p>
 <h2><?php echo ($pageart[0]["libSsTitr1Art"]); ?></h2>
 <p> <?php echo ($pageart[0]["parag2Art"]); ?></p>
 <h2><?php echo ($pageart[0]["libSsTitr2Art"]); ?></h2>
 <p> <?php echo ($pageart[0]["parag3Art"]); ?></p>
 <p> <?php echo ($pageart[0]["libConclArt"]); ?></p>
  


 </body>
 <?php include '../../../footer.php'; ?>
 </html>