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
           <?php
          if($_COOKIE[id] != ""){
            echo "<div class='media bg-dark col-12 col-sm-12 col-md-12 rounded'>
                  <div class='media-body'>
                  <br>
                    <div class='msg-block rounded border border-white'>
                        
                        </div>
                  <br>
                    <h5 class='mt-0'>
                    <button class='btn btn-dark' id='bold'><i class='fas fa-bold'></i></button>
                    <button class='btn btn-dark' id='italic'><i class='fas fa-italic'></i></button>
                    <button class='btn btn-dark' id='underline'><i class='fas fa-underline'></i></button>
                    <button class='btn btn-dark' id='link'><i class='fas fa-link'></i></button>
                    <button class='btn btn-dark' id='strikethrough'><i class='fas fa-strikethrough'></i></button>
                    <button class='btn btn-dark' id='code'><i class='fas fa-code'></i></button>
                    <button class='btn btn-dark' id='quote'><i class='fas fa-quote-right'></i></button>
                    <button class='btn btn-dark' id='image_b'><i class='fas fa-image'></i></button>
                    </h5>";
                include 'sp_bl/editor.php';
                echo "</div>
                </div>";
          }
          ?>
       </div>
      <?php include "sp_bl/foter.php"?>
  </body>
</html>