





<div class="coms">
    <h2 style="margin-bottom:100px;">Commentaires</h2>
    
    <form action="../../backend/comments/post.php" method="post">
        
    <div class="com-box" style="position:relative; left:-5vw;">
    <textarea type="text" name="commentaire" id="" class="comm" required></textarea>
    
        </div>
        <input type="submit" class="poster" value="Commentez">
    </form>
    <?php 
     $commentaires = sql_select("COMMENT", "*", null, "dtCreCom DESC");
     
     
$auteur = sql_select("membre", "pseudoMemb","numMemb IN ( SELECT DISTINCT numMemb FROM comment) ");

    foreach ($commentaires as $commentaire){
        if ($commentaire['numArt'] == $numArts){
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
    <?php } } 
    
    


    ?>
        </div>
    </div>