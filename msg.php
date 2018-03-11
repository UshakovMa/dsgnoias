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
         <?php
            
            $q = mysqli_query($db, "SELECT * FROM `dialog` WHERE `from_user` = '$_COOKIE[id]' OR `to_user` = '$_COOKIE[id]'");
            while($re = mysqli_fetch_assoc($q)){
                if($re[from_user] != $_COOKIE[id]){
                    $user_dialog = get_name($re[from_user], $db);
                    $user_ava_d = get_ava($db, $re[from_user]);
                    $id_s = $re[from_user];
                }
                
                if($re[to_user] != $_COOKIE[id]){
                    $user_dialog = get_name($re[to_user], $db);
                    $user_ava_d = get_ava($db, $re[to_user]);
                    $id_s = $re[to_user];
                }
                echo "<a href='?s=$id_s' class='avatar__wrap'><li class='users__item'>
                <div class='users__avatar avatar'>
                        <img class='avatar__img rounded-circle' src='$user_ava_d' width='35' height='35'         alt='avatar image'>
                    </div>
                    <span class='users__note'>$user_dialog</span>
                </li></a>";
                }
            
            ?>
            
<!--
            <li class="users__item">
              <div class="users__avatar">
                <a href="#" class="avatar__wrap">
                  <img class="avatar__img rounded-circle" src="img_user/1519210743_1.jpg" width="35" height="35" alt="avatar image">
                </a>
              </div>
              <span class="users__note">Edward LeCriston</span>
            </li>
-->
          </ul>
        </div>
            </div>
            <?php
            
            if($_GET[s] == null || $_GET[s] == ''){
                echo "<div class='text-white text-center pls-sel-dialog'>
                    <i class='far fa-envelope text-muted' style='font-size: 5em;'></i>
                    <h5 class='text-muted'>Пожалуйста, выберите диалог</h5>
                </div>";
            }else{
                
                    $user_dialog = get_name((int)$_GET[s], $db);
                    $user_ava_d = get_ava($db, (int)$_GET[s]);
                    $online = get_online($db, $_GET[s]);
                    $o;
                    if($online > time() - 60*5){
                                $o = "Онлайн";
                            }else{
                            $o = "Был в сети ".date('d.m.o в H:i',$online);
                            }
                echo "<div class='col-sm-12 col-md-8'>
               <div class='chat w-100 rounded-top'>
                   <div class='chat-head bg-dark p-2 d-flex'>
                       <img src='$user_ava_d' width='50' height='50' class='rounded-circle' alt=''>
                       <div class='d-block'>
                        <span class='text-white ml-2 font-weight-bold'>$user_dialog</span><br>
                        <strong class='text-muted ml-2'>$o</strong>
                     </div>
                    </div>
                    <div class='chat-body'>
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div>

                        <div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div><div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div><div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div><div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div><div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div><div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                        <div class='message'>
                          <div class='arrow'>
                            <div class='outer'></div>
                            <div class='inner'></div>
                          </div>
                          <div class='message-body text-white'>
                            <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                            <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                          </div>
                        </div>
                        
                                                <div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                                                <div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                                                <div class='message1'>
                            <div class='arrow1'>
                              <div class='outer1'></div>
                              <div class='inner1'></div>
                            </div>
                            <div class='message-body1 text-white'>
                              <p>Hello world! This is a test message to show how to make an arrow on the side of the box.</p>
                              <span class='text-secondary fr'>Прочитано</span>
                            <span class='text-muted fl'>10 мин назад</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class='chat-bottom border-0'>
                        <div class='chat-input'>
                           <form action='file/send_msg' method='post'></form>
                            <textarea rows='1' placeholder='Напишите сообщение...'></textarea>
                            <button type='submit' class='submit-icon'><i class='far fa-paper-plane'></i></button>
                          </div>
                    </div>
               </div>
            </div>";
            }?>
            
        </div>
    </div>    
      <?php include "sp_bl/foter.php"?>
  </body>
</html>