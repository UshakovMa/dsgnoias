<?php
    include "db/conn.php";
    include "check_acc/check.php";
if($_GET[id] == null){
    if($_COOKIE[id] == null){
        header("Location: index.php");
    }
$cm = cout_msg($db, $_COOKIE[id]);
$la = get_last_answ($db, $_COOKIE[id]);
$res = info_user($db, $_COOKIE[id]);
$seting = get_setings($db, $_COOKIE[id]);
$status = get_status($db,$_COOKIE[id]);
$ava = get_ava($db, $_COOKIE[id]);
}else{
    if($_GET[id] == $_COOKIE[id]){
        header("Location: user.php");
    }
    $res = info_user($db,$_GET[id]);
    if($res == ""){
       header("Location: user.php"); 
    }
    $cm = cout_msg($db, $_GET[id]);
    $la = get_last_answ($db, $_GET[id]);
    $seting = get_setings($db, $_GET[id]);
    $status = get_status($db, $_GET[id]);
    $ava = get_ava($db, $_GET[id]);
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
             <div class="col-12 col-md-3 bg-dark user-block-avatar"><br>
                    <img src="<?php echo $ava;?>" class="avatar-img rounded mx-auto d-block" alt="avatar"><br>
                    <?php if($_COOKIE[id] != null && null == $_GET[id]){echo "<a href='setting.php' style='text-decoration: none' class='btn btn-dark btn-lg btn-block'>Редактировать</a>"; }
                 else{
                    echo "<a href='msg.php' style='text-decoration: none' class='btn btn-dark btn-lg btn-block'>Написать сообщение</a>"; 
                 }?>
            </div>
              <div class="col-12 col-sm-12 col-md-8 bg-dark" style="border-radius: .3rem;">
                    <div class="alert text-white" role="alert">
                          <strong><?php echo $res[login]; if($res[verificate] == 1){ echo "  <i class='fas fa-check verificate text-warning' data-toggle='popover' title='Эта страница официально подтверждена администрацией форума'></i>";}?></strong>
                          <span class="text-secondary" style="float: right"> <?php 
                            if($res['last_online'] > time() - 60*5){
                                echo "Онлайн";
                            }else{
                            echo "Был в сети ".date('d.m.o в H:i',$res['last_online']);
                            }?>
                            </span><br>
                            <small class="text-muted"><?php echo $status; ?></small>
                            <button id="save">Сохранить</button>
                    </div><hr>
                    <div class="alert text-white" role="alert">
                          <span class="text-secondary" style="margin-right: 20px;">Регистрация:</span><span>
                          <?php 
                            echo date('d.m.o',$res['date']);?></span><br>
                          <a href="#">Посмотреть обьявления на маркете</a>
                    </div>
                    <div class="alert">
                        <?php include "sp_bl/spoiler.php";?>
                    </div>
                    <hr>
                    <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                        <a href="#" class="text-center" style="text-decoration:none;">
                            <span class="text-warning"><?php echo $cm["COUNT(1)"]?></span><br>
                            <span>Ответы</span>
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
                    </div><br>
                    </div>
                </div>       
           </div><br>
           
            <div class="bg-dark col-12 col-md-12" style="border-radius: .3rem;">
                       <h5 class="text-secondary">Последние ответы</h5><br>
                       <?php
                        $a = 0;
                        while($r = mysqli_fetch_assoc($la)){
                            $a++;
                            $txt = parse_bb_code($r[msg]);
                            $timr = date('d.m.o',$r["date"]);
                            echo "<div class='d-flex'>
                            <img src='$ava' class='img-circle mr-3' width='60' height='60' alt=''>
                            <div class='d-block w-100'>
                                <a href='#' class='text-warning'>$res[login]</a>
                                <p class='text-white'>$txt</p>
                                <div class='alert fr' role='alert'>
                              <a href='post.php?id=$r[post_id]' class='btn'>Перейти к обсуждению</a>
                              <span class='text-secondary btn'>$timr</span>
                            </div><hr>
                            </div>
                        </div>";
                        }
                        if($a == 0){
                            echo "<h3 class='text-center text-muted'>У вас пока что нет ответов</h3><br>";
                        }
                ?>
                        
                    </div>
      </div>
       <?php include "sp_bl/bl_foot.php";?>
    <?php include "sp_bl/foter.php";?>
  </body>
</html>