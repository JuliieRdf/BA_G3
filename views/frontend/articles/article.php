 <?php
  include '../../../header.php';
  ?>

 <body>
   <?php
    $numArts = $_GET['numArt'];
    $pageart = sql_select("ARTICLE", "*", "numArt=$numArts");
    ?>
   <p class="date"><?php echo ($pageart[0]["dtCreArt"]); ?></p>
   <div class="gutter container-fluid">
     <div class="row">
       <div class="col-12">
         <h1 class="titre-a"> <?php echo ($pageart[0]["libTitrArt"]); ?></h1>
       </div>
     </div>
     <div class="row">

       <div class="col-1 col-md-0"></div>
       <div class="col-7 col-md-12">
         <p class="chapo"> <?php echo ($pageart[0]["libChapoArt"]); ?></p>
         <div class="article-img"><img src=<?php echo $pageart[0]['urlPhotArt']; ?> alt="Photo de l'article"></div>
         <p class="accroche"> <?php echo ($pageart[0]["libAccrochArt"]); ?></p>
         <p class="paragraphe"><?php echo ($pageart[0]["parag1Art"]); ?></p>

       </div>
       <div class="col-4 col-md-0"></div>

     </div>
     <div class="row">
       <div class="col-1 col-md-0"></div>
       <div class="col-7 col-md-12">
         <h2 class="sous-titre"><?php echo ($pageart[0]["libSsTitr1Art"]); ?></h2>
         <p class="paragraphe"> <?php echo ($pageart[0]["parag2Art"]); ?></p>
       </div>
       <div class="col-4 col-md-0"></div>
     </div>


     <div class="row">
       <div class="col-1 col-md-0"></div>
       <div class="col-7 col-md-12">
         <h2 class="sous-titre"><?php echo ($pageart[0]["libSsTitr2Art"]); ?></h2>
         <p class="paragraphe"> <?php echo ($pageart[0]["parag3Art"]); ?></p>
       </div>
       <div class="col-4 col-md-0"></div>
     </div>

     <div class="row">
       <div class="col-1 col-md-0"></div>
       <div class="col-7 col-md-12">
         <p class="conc"> <?php echo ($pageart[0]["libConclArt"]); ?></p>
       </div>
       <div cFlass="col-4 col-md-0"></div>
     </div>

     <div class="row">
       <div class="col-9"></div>
       <div class="col-3">
         
       </div>
     </div>
<<<<<<< HEAD
     <?php include 'commentaire.php'; ?>
   </div>
=======
>>>>>>> 214cee45a26caf2f78f2677edb286a26a085afc0

   </div>
   <?php include '../contact.php'; ?>
 </body>
 <?php include '../../../footer.php'; ?>

 </html>