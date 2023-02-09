<?php
  include '../../../header.php';
sql_connect();?>



<style>.com-box{
    border: 3px;
    border: solid;
    width: 68.33vw;
    min-height: 200px;
}</style>

<div class="coms">
    <h2>Commentaires</h2>
    <?php 
     $commentaires = sql_select("COMMENT", "*", null, "dtCreCom DESC");
     
     
$auteur = sql_select("membre", "pseudoMemb","numMemb IN ( SELECT DISTINCT numMemb FROM comment) ");

    foreach ($commentaires as $commentaire){
     ?>
        <div class="commentaire">
            <h2><?php
            echo $auteur[$commentaire['numMemb']-1]['pseudoMemb'];
              ?></h2>
            <div class="com-box">
                <p>
                    <?php 
                    if($commentaire['attModOK']==1){
                    echo $commentaire['libCom']; 
                    }else{
                        echo '<i>Ce commentaire a été supprimé</i>';
                    }
                     ?>
                </p>
            </div>
            <div class="com-date">
                <p>
                 <?php echo $commentaire['dtCreCom']; ?>
                </p>
            </div>
    <?php } 
    
    


    ?>
        </div>
    </div>