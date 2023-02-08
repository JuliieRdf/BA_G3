 <?php
            include '../../../header.php';
            ?>
          <h1>Article</h1>

          <?php
           $pagearts = sql_select("ARTICLE", "*", "numArt = 1");
           exit(print_r($pagearts)); ?>
          </div>

      </body>

      </html>