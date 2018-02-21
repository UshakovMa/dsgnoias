<?php
    include "db/conn.php";
    include "check_acc/check.php";
if($_GET[id] == null){
    if($_COOKIE[id] == null){
        header("Location: index.php");
    }
$res = info_user($db, $_COOKIE[id]);
}else{
    if($_GET[id] == $_COOKIE[id]){
        header("Location: user.php");
    }
    $res = info_user($db,$_GET[id]);
}
?>
<!doctype html>
<html lang="ru">
  <?php include "sp_bl/head.php";?>
  <body>
    <?php include "sp_bl/header.php";?>
  <br>
   <div class="container">
       <div class="row no-gutters justify-content-between">
             <div class="col-12 col-md-3 bg-dark" style="border-radius: .3rem;"><br>
                    <img src="img/avatar.png" class="avatar-img rounded mx-auto d-block" alt="avatar"><br>
                    <?php if($_COOKIE[id] != null && null == $_GET[id]){echo "<a href='setting.php' style='text-decoration: none' class='btn btn-dark btn-lg btn-block'>Редактировать</a>"; }?>
            </div>
              <div class="col-12 col-sm-12 col-md-8 bg-dark" style="border-radius: .3rem;">
                    <div class="alert text-white" role="alert">
                          <strong><?php echo $res[login]; if($res[verificate] == 1){ echo "  <i class='fas fa-check verificate text-warning' data-toggle='popover' title='Эта страница официально подтверждена администрацией форума'></i>";}?></strong>
                          <span class="text-secondary" style="float: right"> <?php 
                            if($res['last_online'] > time() - 60*5){
                                echo "Онлайн";
                            }else{
                            echo "Был в сети ".date('d.m.o в H:i',$res['last_online'])." мин назад";
                            }?>
                            </span>
                    </div><hr>
                    <div class="alert text-white" role="alert">
                          <span class="text-secondary" style="margin-right: 20px;">Регистрация:</span><span>
                          <?php 
                            echo date('d.m.o',$res['date']);?></span><br>
                          <a href="#">Посмотреть обьявления на маркете</a>
                    </div><hr>
                    <div class="container">
                    <div class="row ">
                        <div class="col d-flex justify-content-center">
                        <a href="#" class="text-center" style="text-decoration:none;">
                            <span class="text-warning">0</span><br>
                            <span>Сообщений</span>
                        </a>
                        </div>
                        <div class="col d-flex justify-content-center">
                        <a href="#" class="text-center" style="text-decoration:none;">
                            <span class="text-warning">0</span><br>
                            <span>Симпатий</span>
                        </a>
                        </div>
                        <div class="col d-flex justify-content-center">
                        <a href="#" class="text-center" style="text-decoration:none;">
                            <span class="text-warning">0</span><br>
                            <span>Трофеев</span>
                        </a>
                        </div>
                        <div class="col d-flex justify-content-center">
                        <a href="#" class="text-center" style="text-decoration:none;">
                            <span class="text-warning">0</span><br>
                            <span>Розыгрышей</span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>       
           </div><br>
           
            <div class="lc-walls bg-dark col-12 col-md-12" style="border-radius: .3rem;">
                        <h5 class="text-secondary">-Последние ответы</h5>
                        <div class="d-flex">
                            <img src="img/avatar.png" class="img-circle" width="60" height="60" alt="">
                            <div class="d-block">
                                <a href="#" class="text-warning">NickName</a>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eius, repudiandae molestiae omnis tempora optio sed impedit itaque molestias quas.</p>
                                <div class="alert fr" role="alert">
                              <a href="#" class="btn">Пожаловатся</a>
                              <a href="#" class="btn">Ответить</a>
                              <span class="text-secondary btn">17.02.2018</span>
                            </div><hr>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img src="img/avatar.png" class="img-circle" width="60" height="60" alt="">
                            <div class="d-block">
                                <a href="#" class="text-warning">NickName</a>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eius, repudiandae molestiae omnis tempora optio sed impedit itaque molestias quas.</p>
                                <div class="alert fr" role="alert">
                              <a href="#" class="btn">Пожаловатся</a>
                              <a href="#" class="btn">Ответить</a>
                              <span class="text-secondary btn">17.02.2018</span>
                            </div><hr>
                            </div>
                        </div>
                    </div>
      </div>
       <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>