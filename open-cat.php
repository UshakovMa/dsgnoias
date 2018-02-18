<?php
include "db/conn.php";
include "check_acc/check.php";
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
        <div class="alert bg-dark list-str" role="alert">
  <a href="#" class="btn">Подписатся на тему</a>
  <nav style="float: right">
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
</nav><br>

<select id="select1" class="bg-dark text-white">
        <option value="">По последниму ответу</option>
          <option value="">По дате создания тему</option>
          <option value="">По названию темы</option>
          <option value="">По количеству ответов</option>
          <option value="">По количеству просмотров</option>
      </select>
      <select id="select2" class="bg-dark text-white">
        <option value="">По убыванию</option>
          <option value="">По возрастанию</option>
      </select>
      <select id="select3" class="bg-dark text-white">
        <option value="">(Учитывать все)</option>
          <option value="">Авторская статья</option>
      </select>
      <button type="button" class="btn btn-secondary rounded-0">Применить</button>
      <button type="button" class="btn btn-outline-success">Создать тему</button>
</div><br>
   <ul class="list-group">
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li><br>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
      <li class="list-group-item list-group-item-dark">
      <div class="open-cat-them fl">
          <a href="#">[Актуально] Слив хайдов с различных форумов.</a><br>
      <a href="#" class="open-cat-name text-danger">Lendry,</a>&nbsp;<a href="#">11 мар 2013,</a><span class="text-secondary">&nbsp;3 296 ответов</span>
      </div>
      <div class="open-cat-user fr">
       <img src="img/avatar.png" class="rounded-circle" width="50" alt="">
        <a class="text-danger" href="#">LendryHD</a>
        <span class="text-secondary">| Сегодня, в 6:00</span>
      </div>
      </li>
    </ul>
    </div><br>
    <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>