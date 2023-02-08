 <?php
            include '../../../header.php';
            ?>
          <h1>Article</h1>
<?php        $pagearts = sql_select("ARTICLE", "*", "numArt = 1"); ?>

          <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo($numArt); ?>" readonly="readonly">
          <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['DtCreArt']; ?></td>
                            <td><?php echo $status['libTitrArt']; ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
          <?php
    ?>
          </div>

      </body>

      </html>