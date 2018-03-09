<?php
include "db/conn.php";
include "check_acc/check.php";
if($_GET[theme] != null && $_GET[category] == null){
    $th = (int)$_GET[theme];
    $query = get_post($db,$th);
}
if($_GET[theme] != null && $_GET[category] != null){
    $th = (int)$_GET[theme];
    $cat = (int)$_GET[category];
    $query = get_post_1($db,$th,$cat);
}
if($_GET[theme] == null && $_GET[category] == null){
    $query = get_all_post($db);                   
}
$nums_row = $query->num_rows;
$nums_row = 100;
?>
<!doctype html>
<html lang="ru">
  <?php include "sp_bl/head.php";?>
  <body>
    <?php include "sp_bl/header.php";?>
    <div class="container">
        <?php include "sp_bl/bread.php"?>
 <div class="top-cats">
  <h4 class="text-white">Заголовк</h4>
   <div class="categories bg-dark justify-content-center rounded">
            <div class="cat1">
                <a href="#">Раздачи баз для брута, Email</a><br>
                <a href="#">Раздачи аккаунтов и ключей</a><br>
                <a href="#">Раздачи дорок, уязвимых сайтов</a><br>
            </div>
            <div class="cat2">
                <a href="#">Способы заработка</a><br>
                <a href="#">Раздачи прокси</a><br>
                <a href="#">Раздача дедиков</a><br>
            </div>
            <div class="cat3">
                <a href="#">Халява КС ГО, Pubg</a><br>
                <a href="#">Розыгрыши от пользователей</a><br>
                <a href="#">Игровые платформы</a><br>
            </div>
        </div>
    </div><br>
    <div class="alert bg-dark list-str" style="height: 125px;" role="alert">
  <a href="#" class="btn">Подписатся на тему</a>
  <a href="" class="btn btn-outline-success fr">Создать тему</a>
<br>
<br>
<?php
    echo $nums_row / 25;
    if ($nums_row / 25 > 1){
echo "<nav style='float: right'>
  <ul class='pagination '>
    <li class='page-item'>
      <a class='page-link bg-dark text-white' href='#' aria-label='Previous'>
        <span aria-hidden='true'>&laquo;</span>
        <span class='sr-only'>Previous</span>
      </a>
    </li>";
        for($i = 0; $i < $nums_row / 25; $i++ ){
            echo "<li class='page-item'><a class='page-link bg-dark text-white' href=''>$i</a></li>";
        }
        
    echo "<li class='page-item'>
      <a class='page-link bg-dark text-white' href='#' aria-label='Next'>
        <span aria-hidden='true'>&raquo;</span>
        <span class='sr-only'>Next</span>
      </a>
    </li>
  </ul>
</nav>";}
            ?>
</div><br>
   <ul class="list-group">
        <?php 
    if($query != null){
            while($rs = mysqli_fetch_assoc($query)){
                $time = date('d.m.y, в H:i',$rs['date_create']);
                $aut = get_name($rs[author],$db);
                echo "<li class='list-group-item list-group-item-dark'>
      <div class='open-cat-them fl'>
          <a href='/post.php?id=$rs[id]'>$rs[title]</a><br>
      <a href='#' class='open-cat-name text-danger'>Lendry,</a>&nbsp;<a href='#'>11 мар 2013,</a><span class='text-secondary'>&nbsp;3 296 ответов</span>
      </div>
      <div class='open-cat-user fr'>
       <img src='img/avatar.png' class='rounded-circle' width='50' alt=''>
        <a class='text-danger' href='/user.php?id=$rs[author]'>$aut</a>
        <span class='text-secondary'>| $time</span>
      </div>
      </li>";
            }
    }
            
       
       ?>
    </ul>
    </div><br>
    <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>