<head>
  <link rel="stylesheet" href="../../../source/css/articles-col.css">
</head>

<?php
include '../../../header.php';
?>

<body>
  <?php
  $numArts = $_GET['numArt'];
  $pageart = sql_select("ARTICLE", "*", "numArt=$numArts");
  $numMotCle = sql_select(
    "motclearticle INNER JOIN motcle ON motclearticle.numMotCle = motcle.numMotCle",
    "*",
    "numArt=$numArts"
  );

  ?>
  <p class="date">
    <?php echo ($pageart[0]["dtCreArt"]); ?>
  </p>
  <div class="gutter container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="titre-a">
          <?php echo ($pageart[0]["libTitrArt"]); ?>
        </h1>
      </div>
    </div>
    <div class="row">

      <div class="col-1 "></div>
      <div class="col-7 ">
        <p class="chapo">
          <?php echo ($pageart[0]["libChapoArt"]); ?>
        </p>
        <div class="article-img"><img src=<?php echo $pageart[0]['urlPhotArt']; ?> alt="Photo de l'article"></div>
        <p class="accroche">
          <?php echo ($pageart[0]["libAccrochArt"]); ?>
        </p>
        <p class="paragraphe">
          <?php echo ($pageart[0]["parag1Art"]); ?>
        </p>

      </div>
      <div class="col-4">

        <?php include '../colonne-d.php'; ?>
      </div>

    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-7">
        <h2 class="sous-titre">
          <?php echo ($pageart[0]["libSsTitr1Art"]); ?>
        </h2>
        <p class="paragraphe">
          <?php echo ($pageart[0]["parag2Art"]); ?>
        </p>
      </div>
      <div class="col-4 "></div>
    </div>


    <div class="row">
      <div class="col-1"></div>
      <div class="col-7">
        <h2 class="sous-titre">
          <?php echo ($pageart[0]["libSsTitr2Art"]); ?>
        </h2>
        <p class="paragraphe">
          <?php echo ($pageart[0]["parag3Art"]); ?>
        </p>
      </div>
      <div class="col-4 "></div>
    </div>

    <div class="row">
      <div class="col-1 "></div>
      <div class="col-7">
        <p class="conc">
          <?php echo ($pageart[0]["libConclArt"]); ?>
        </p>
      </div>
      <div cFlass="col-4"></div>
    </div>
    <?php foreach ($numMotCle as $key => $value) {
      echo ('#' . $value['libMotCle'] . '<br>');
    } ?>
    <div class="row">
      <div class="col-9"></div>
      <div class="col-3">
        <div class="share2">
          <button><img src="/../source/images/uploads/share.webp" alt="Bouton partager">
            <p>Partagez</p>
          </button>
        </div>

      </div>
    
    </div>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-9">
       <?php include 'commentaire.php'; ?></div>
    </div>

  </div>
  <?php include '../contact.php'; ?>
</body>
<?php include '../../../footer.php'; ?>

</html>