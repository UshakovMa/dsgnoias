<?php
include "db/conn.php";
include "check_acc/check.php";
if($_GET[id] == "" && $_GET[id] == null){
    header("Location: index.php");
}
$query = get_post_id($db,$_GET[id]);

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
  <footer class="blockquote-footer">Тема в разделе <a href="#">Требуются спамеры</a>, создана пользователем <a href="#">TMT</a>, <a href="#">13 мая 2017</a>. (Поднята Понедельник в 08:54)<br/>    
Просмотров: 32734</footer>
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
         <div class="col-12 col-md-3 text-center bg-dark">
              <span class="nick-name text-white"><?php echo get_name($query[author],$db)?></span><br>
              <span class="them text-danger">Редактор</span><br>
              <img src="img/avatar.png" alt="">
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
              
               <span class="text-white"><?php echo $query[msg];?></span>
              
                <br>
              <div class="alert" role="alert">
                  <a href="#" class="btn">№1</a>&nbsp;<span class="text-secondary btn">24 июнь 2017</span>
                  <a href="#" class="btn">Пожаловатся</a>
                  <a href="#" class="btn fr">Ник в ответ</a>
                  <a href="#" class="btn fr">Ответить</a>
                </div>
          </div><hr>
          <div class="col-12 col-md-3 text-center bg-dark">
              <span class="nick-name text-white">NICK-NAME</span><br>
              <span class="them text-danger">Редактор</span><br>
              <img src="img/avatar.png" alt="">
              <ul class="text-left">
                  <li class="text-warning">12 <span class="text-white">Сообщений</span></li>
                  <li class="text-warning">43 <span class="text-white">Симпатий</span></li>
                  <li class="text-warning">1 <span class="text-white">Год с нами</span></li>
              </ul>
              <div class="soc-icon">
                  <a href="#" class="btn btn-lg"><i class="fab fa-skype"></i></a>
                  <a href="#" class="btn btn-lg"><i class="fab fa-vk"></i></a>
                  <a href="#" class="btn btn-lg"><i class="fab fa-telegram"></i></a>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-9 bg-dark">
              <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!</span><br>
              <div class="alert" role="alert">
                  <a href="#" class="btn">№1</a>&nbsp;<span class="text-secondary btn">24 июнь 2017</span>
                  <a href="#" class="btn">Пожаловатся</a>
                  <a href="#" class="btn fr">Ник в ответ</a>
                  <a href="#" class="btn fr">Ответить</a>
                </div><hr>
                <div class="media">
                  <img class="mr-3" src="img/avatar.png" width="50" height="50" alt="ava">
                  <div class="media-body">
                    <h5 class="mt-0">
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    <a href="#" class="btn"><i class="far fa-envelope"></i></a>
                    </h5>
                    <textarea class="form-control bg-dark text-white"  aria-label="With textarea"></textarea><br>
                    <button type="button" class="btn btn-outline-success" style="float: right">Отправить</button>
                  </div>
                </div>
          </div>
    </div>
    </div><br>
    <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>