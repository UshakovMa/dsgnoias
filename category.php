<?php
include "db/conn.php";
include "check_acc/check.php";

$p_ = 0;

if($_GET[p] == 1){
    $p_ = ($_GET[p]- 1) * 25;
}else if($_GET[p] == 0 || $_GET[p] == null){
    $p_ = $_GET[p] * 25;
}
else{
    $p_ = ($_GET[p]- 1) * 25;
}

if($_GET[theme] != null && $_GET[category] == null){
    $th = (int)$_GET[theme];
    $query = get_post($db,$th,$p_);
}
if($_GET[theme] != null && $_GET[category] != null){
    $th = (int)$_GET[theme];
    $cat = (int)$_GET[category];
    $query = get_post_1($db,$th,$cat,$p_);
}
if($_GET[theme] == null && $_GET[category] == null){
    $query = get_all_post($db,$p_);                   
}
$nums_row = $query->num_rows;
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
            $p = $i + 1;
            echo "<li class='page-item'><a class='page-link bg-dark text-white' href='category.php&p=$p'>$p</a></li>";
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
                $answ = cout_answ($db, $rs[id]);
                $answ = $answ['COUNT(1)'];
                $last_user = last_user_answ($db, $rs[id]);
                $time = date('d.m.y, в H:i',$rs['date_create']);
                $aut = get_name($rs[author],$db);
                $last_user = mysqli_fetch_assoc($last_user);
                $last_aut = get_name($last_user[author], $db);
                $time_l = date('d.m.y, в H:i',$last_user['date']);
                echo "<li class='list-group-item list-group-item-dark'>
      <div class='open-cat-them fl'>
          <a href='/post.php?id=$rs[id]'>$rs[title]</a><br>
      <a href='user.php?id=$last_user[author]' class='open-cat-name text-danger'>$last_aut,</a>&nbsp;$time_l,<span class='text-secondary'>&nbsp;$answ ответов</span>
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