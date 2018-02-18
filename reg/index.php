<?php
include "../db/conn.php";
include "../function/fun.php";
if(!empty($_POST)){
    $pass = md5(md5($_POST['pass']));
    $hash = hash_gen($pass,$_POST[login]);
    $time = time();
    $query = mysqli_query($db, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `ip`, `hash_sesion`, `access_level`, `coin_money`, `date`) VALUES (NULL, '$_POST[login]', '$_POST[email]', '$pass', '$_SERVER[REMOTE_ADDR]', '$hash', '1', '0', '$time')");
    if($query == false){
        echo "error@Логин или email уже существуют";
    }else{
        $hass = hash_mail_active($_POST[email],$_SERVER[REMOTE_ADDR]);
        mysqli_query($db,"INSERT INTO `reg_tmp` (`hash`, `user_email`,`date`) VALUES ('$hass', '$_POST[email]','$time')");
        mail("$_POST[email]", "Активация аккаунта", "http://$_SERVER[SERVER_NAME]/activate/index.php?code=$hass"); 
       echo "success@Вам на почту отправлено ссылка для активации аккаунта!!!";
    }
}
?>