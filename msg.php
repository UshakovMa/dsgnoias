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
                        <div class='d-flex'>
                            <img src='$ava' class='img-circle mr-3' width='50' height='50'>
                            <div class='d-block'>
                                <a href='#' class='text-warning'>Мамедов Дмитрий</a>
                                <p class='text-white'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eius, repudiandae molestiae omnis tempora optio sed impedit itaque molestias quas.</p>
                            </div>
                            </div>
                    <div class='d-flex'>
                    <img src='$ava' class='img-circle mr-3' width='50' height='50'>
                    <div class='d-block'>
                        <a href='#' class='text-warning'>Ушаков Максим</a>
                        <p class='text-white'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eius, repudiandae molestiae omnis tempora optio sed impedit itaque molestias quas.</p>
                    </div>
                    </div>
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
                    <button class='btn btn-dark' id='emoji'><i class='far fa-smile'></i></button>
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