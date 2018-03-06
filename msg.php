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
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="chat__search search">
          <div class="search">
            <div class="search__icon">
              <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <input type="search" class="search__input" placeholder="Быстрый поиск">
          </div>
        </div>
           <br>
        <div class="chat__users">
          <ul class="users">
            <li class="users__item users__item_group">
              <div class="users__avatar avatar">
                <a href="#" class="avatar__wrap"><img class="avatar__img rounded-circle" src="img_user/1519210743_1.jpg" width="35" height="35" alt="avatar image"></a>
              </div>
              <span class="users__note">MaximModus</span>
            </li>
            <li class="users__item">
              <div class="users__avatar">
                <a href="#" class="avatar__wrap">
                  <img class="avatar__img rounded-circle" src="img_user/1519210743_1.jpg" width="35" height="35" alt="avatar image">
                </a>
              </div>
              <span class="users__note">Edward LeCriston</span>
            </li>
          </ul>
        </div>
           
            </div>
            <div class="col-sm-12 col-md-8">
               <div class="chat w-100 rounded-top">
                   <div class="chat-head bg-dark p-2 d-flex">
                       <img src="img/avatar.png" width="50" height="50" class="rounded-circle" alt="">
                       <div class="d-block">
                        <span class="text-white ml-2 font-weight-bold">User Name</span><br>
                        <strong class="text-muted ml-2">был в сети 15 мин назад</strong>
                     </div>
                    </div>
                    <div class="chat-body">
                        <div class="message">
                          <div class="arrow">
                            <div class="outer"></div>
                            <div class="inner"></div>
                          </div>
                          <div class="message-body text-white">
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class="text-secondary fr">Прочитано</span>
                            <span class="text-muted fl">10 мин назад</span>
                          </div>
                        </div>

                        <div class="message1">
                            <div class="arrow1">
                              <div class="outer1"></div>
                              <div class="inner1"></div>
                            </div>
                            <div class="message-body1 text-white">
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class="text-secondary fr">Прочитано</span>
                            <span class="text-muted fl">10 мин назад</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-bottom border-0">
                        <div class='chat-input'>
                            <textarea rows='1' placeholder='Напишите сообщение...'></textarea>
                            <div class='submit-icon'><i class="far fa-paper-plane"></i></div>
                          </div>
                    </div>
               </div>
            </div>
        </div>
    </div>    
      <?php include "sp_bl/foter.php"?>
  </body>
</html>