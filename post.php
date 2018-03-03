<?php
include "db/conn.php";
include "check_acc/check.php";
if($_GET[id] == "" && $_GET[id] == null){
    header("Location: index.php");
}
$query = get_post_id($db,$_GET[id]);
views_p($db, $query[views], $_GET[id]);
?>
<!doctype html>
<html lang="ru">
  <?php include "sp_bl/head.php";?>
  <body>
    <?php include "sp_bl/header.php";?>
    <div class="container">
        <?php include "sp_bl/bread.php"?>
   <blockquote class="blockquote text-white">
  <p class="mb-0"><?php echo $query[title]?></p>
  <footer class="blockquote-footer">Тема в разделе <a href="category.php?theme=<?php echo $query[theme_id] . "&category=" . $query[cat_id];?>"><?php echo get_category_name($db, $query[cat_id]);?></a>, создана пользователем <a href="user.php?id=<?php echo $query[author]?>"><?php echo get_name($query[author],$db)?></a>, <?php echo date('d.m.o в H:i',$query[date_create])?>.<br/>    
Просмотров: <?php echo $query[views];?></footer>
</blockquote>
   <div class="reklama" style="width: 100%">
       <img src="img/csgo.cash.jpg" style="width: 100%;" alt="">
   </div>
   <div class="alert bg-dark list-str" role="alert">
  <a href="#" class="btn">Подписатся на тему</a>
  <nav aria-label="Page navigation example" style="float: right">
  <ul class="pagination ">
    <li class="page-item">
      <a class="page-link bg-dark text-white" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="#">1</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="#">2</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link bg-dark text-white" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
      <div class="row justify-content-around margin-0">
         <div class="col-12 col-md-3 text-center bg-dark"><br>
              <span class="nick-name text-white"><?php echo get_name($query[author],$db)?></span><br>
              <span class="them text-danger">Редактор</span><br>
              <img src="<?php echo get_ava($db,$query[author])?>" alt="" class="avatar-img rounded-circle" style="width: 100%">
              <div class="soc-icon">
                  <a href="#" class="btn btn-lg"><i class="far fa-lightbulb"></i></a>
                  <a href="#" class="btn btn-lg"><i class="fab fa-vk"></i></a>
                  <a href="#" class="btn btn-lg"><i class="fab fa-telegram"></i></a>
                  <a href="#" class="btn btn-lg"><i class="fab fa-instagram"></i></a>
              </div>
              <ul class="text-left" style="margin-left: 15%">
                  <li class="text-warning">12 <span class="text-white">Сообщений</span></li>
                  <li class="text-warning">43 <span class="text-white">Симпатий</span></li>
                  <li class="text-warning">1 <span class="text-white">Год с нами</span></li>
              </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-9 bg-dark">
             <!--
              <div class="img-post"><br>
                  <img src="img/content.gif" alt="">
              </div><br>
              <h3 class="text-white text-center">Какой то текст</h3>
              <span class="text-secondary">Последнее редактирование: 14 дек 2017</span>
              <div class="msg-buton fr">
                <button type="button" class="btn btn-success">Написать в ЛС</button>
              <button type="button" class="btn btn-primary">Написать в VK</button>
              <button type="button" class="btn btn-info">Написать в Telgram</button><br>
              </div>
                            <details>
                <summary class="btn text-white bg-dark">Больше</summary>
                <img src="img/content.gif" width="200" alt="">
                <img src="img/content.gif" width="200" alt="">
                <img src="img/content.gif" width="200" alt="">
                <img src="img/content.gif" width="200" alt="">
              </details>-->
              <br>
               <div class="text-white" id="sel-text"><?php echo parse_bb_code($query[msg]);?></div>
               <div id="popUpBox">Цитировать</div>
                <br>
              <div class="alert" role="alert">
                  <a class='btn btn-dark' href="editor_post.php?id=<?php echo $_GET[id];?>">Редактировать</a>
                  <span class="text-secondary btn">24 июнь 2017</span>
                  <button class='btn btn-dark'>Пожаловатся</button>
                  <button class='btn btn-dark fr' id='ans' data-name="<?php echo get_name($query[author],$db)?>">Ответить</button>
                </div>
          </div><hr>
          
          <?php 
            $rew = get_all_answ($db, $_GET[id]);
            while($res = mysqli_fetch_assoc($rew)){
                $na = get_name($res[author],$db);
                $text = parse_bb_code($res[msg]);
                $im = get_ava($db,$res[author]);
                echo "<div class='col-12 col-md-3 text-center bg-dark'>
              <span class='nick-name text-white'>$na</span><br>
              <span class='them text-danger'>Редактор</span><br>
              <img src='$im' alt='' class='rounded-circle avatar-img' style='width:100%'>
              <ul class='text-left'>
                  <li class='text-warning'>12 <span class='text-white'>Сообщений</span></li>
                  <li class='text-warning'>43 <span class='text-white'>Симпатий</span></li>
                  <li class='text-warning'>1 <span class='text-white'>Год с нами</span></li>
              </ul>
              <div class='soc-icon'>
                  <a href='#' class='btn btn-lg'><i class='fab fa-skype'></i></a>
                  <a href='#' class='btn btn-lg'><i class='fab fa-vk'></i></a>
                  <a href='#' class='btn btn-lg'><i class='fab fa-telegram'></i></a>
              </div>
          </div>
          <div class='col-12 col-sm-12 col-md-9 bg-dark'>
              <span class='text-white min-h w-100'>
                  $text
              </span><br>
              <div class='alert' role='alert'>
                  <a href='#' class='btn'>№1</a>&nbsp;<span class='text-secondary btn'>24 июнь 2017</span>
                  <a href='#' class='btn'>Пожаловатся</a>
                  <a href='#' class='btn fr'>Ник в ответ</a>
                  <a href='#' class='btn fr'>Ответить</a>
                </div>
                <hr>
          </div>";
            }
          
          ?>
          
          
          <?php
          if($_COOKIE[id] != ""){
            echo "<div class='media bg-dark col-12 col-sm-12 col-md-12'>
                  <img class='mr-3 mt-5 rounded-circle' src='$ava' width='75' height='75' alt='ava'>
                  <div class='media-body'>
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
    </div><br>
    <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>