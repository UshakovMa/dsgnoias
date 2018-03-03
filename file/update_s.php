<?php
include "../db/conn.php";
include "../check_acc/check.php";

if(!empty($_POST)){
    $vk = end(explode('/', $_POST[vk]));
    $steam = end(explode('/', $_POST[steam]));
    $telegram = end(explode('/', $_POST[telegram]));
    $telegram = end(explode('@', $telegram));
    $twitter = end(explode('/', $_POST[twitter]));
    set_social_net($db, $_COOKIE[id], $vk, $_POST[skype], $telegram, $steam, $twitter);
    echo "success@Успех";
}

?>