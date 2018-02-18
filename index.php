<?php
    include "db/conn.php";
    include "check_acc/check.php";
?>
<!doctype html>
<html lang="ru">
<?php include "sp_bl/head.php";?>
  <body>
<?php include "sp_bl/header.php";?>
  <br>
   <div class="container">
           <?php include "sp_bl/tab_panel.php";?>
            <div class="row no-gutters justify-content-around">
              <div class="col-12 col-sm-12 col-md-8">
                    <div class="reklama">
                        <img src="img/svob.gif" class="rounded mx-auto d-block" alt="...">
                        <img src="img/svob.gif" class="rounded mx-auto d-block" alt="...">
                        <img src="img/svob.gif" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <?php views_all_theme($db) ?>
                </div>
                <?php include "sp_bl/rg_block.php";?>
            </div><br>
                   <?php include "sp_bl/bl_foot.php"?>
       </div>
      <?php include "sp_bl/foter.php"?>
  </body>
</html>