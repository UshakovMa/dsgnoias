<?php

function hash_gen($pass,$login){
    return md5($pass.$login.$_SERVER[REMOTE_ADDR]);
}

function hash_mail_active($email,$ip){
    return md5($email.$ip."check");
}

function vhod ($el, $pass, $db){
    $query = mysqli_query($db, "SELECT `login`,`email`,`password`,`id`,`active` FROM `users` WHERE `login` = '$el' || `email` = '$el'");
    $query = mysqli_fetch_assoc($query);
    if($query == null){
        echo "warning@Пользователь не найден!!!";
    }else{
        if($query[active] == 1){
        if($query[password] == $pass){
            setcookie ("id", $query[id], time()+3600*24*30, "/");
            setcookie ("hash", hash_gen($query[password], $query[login]), time()+3600*24*30, "/");
            mysqli_query($db, "UPDATE `users` SET `hash_sesion` = '".hash_gen($query[password], $query[login])."' WHERE `id` = '$query[id]'");
            echo "Авторизированы";
        }else{
            echo "error@Пароль не верен!!!";
        }
        }else{
            echo "warning@Аккаунт не активирован. Зайдите на почту, чтобы активировать аккаунт!!!";
        }
    }
}

function get_name ($id, $db){
    $query = mysqli_query($db, "SELECT `login` FROM `users` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query[login];
}

function views_all_theme($db){
    $query = mysqli_query($db, "SELECT * FROM `theme`");
    while ($res = mysqli_fetch_assoc($query)){     
        echo "        <div class='media bg-dark rounded'>
                      <img class='mr-3 img-categories' src='img/chat.png' width='70' style='padding-top: 25px;padding-left: 11px;'>
                      <div class='media-body'>
                        <h5 class='mt-0'><a href='category.php?theme=$res[id]'>$res[name]</a></h5>
                        <div class='categories row'>
                        <div class='cat1 col-sm-3'>";
                            get_category($db,$res[id],"0,3");
                        echo    "</div>
                        <div class='cat2 col-sm-3'>";
                        get_category($db,$res[id],"4,3");
                        echo  "</div>
                            <div class='cat3 col-sm-3'>";
                        get_category($db,$res[id],"7,3");
                        echo    "</div>
                        </div>
                      </div>
                    </div><br>";
        
    }
}

function get_category($db,$th,$lim){
    $query = mysqli_query($db, "SELECT * FROM `category` WHERE `id_theme` = '$th' LIMIT $lim");
     while ($res = mysqli_fetch_assoc($query)){
         echo "<a href='category.php?theme=$res[id_theme]&category=$res[id]'>$res[name]</a><br>";
     }
}

function get_category_name($db,$th){
    $query = mysqli_query($db, "SELECT `name` FROM `category` WHERE `id` = '$th'");
    $query = mysqli_fetch_assoc($query);
    return $query[name];
}

function info_user($db,$id){
    $query = mysqli_query($db, "SELECT `date`,`login`,`last_online`,`verificate` FROM `users` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query;
}

function get_coin($db,$id){
    $query = mysqli_query($db, "SELECT `coin_money` FROM `users` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query[coin_money];
}

function last_online($db,$id){
    $tm = time();
    mysqli_query($db, "UPDATE `users` SET `last_online` = '$tm' WHERE `id` = '$id'");
}

function get_post($db, $theme){
    $query = mysqli_query($db, "SELECT * FROM `post` WHERE `theme_id` = '$theme'");
    return $query;
}

function get_post_1($db, $theme, $cat){
    $query = mysqli_query($db, "SELECT * FROM `post` WHERE `theme_id` = '$theme' && `cat_id` = '$cat'");
    return $query;
}

function get_all_post($db){
    $query = mysqli_query($db, "SELECT * FROM `post`");
    return $query;
}

function get_post_id($db, $id){
    $query = mysqli_query($db, "SELECT * FROM `post` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query;
}

function get_admin($db){
    $t = time() - 60*5;
    $query = mysqli_query($db, "SELECT * FROM `users` WHERE `comand` = '1' and `last_online` > '$t' LIMIT 5");
    return $query;
}

function get_status($db, $id){
    $query = mysqli_query($db, "SELECT `status` FROM `settings` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query[status];
}

function set_status($db, $text){
    mysqli_query($db, "UPDATE `settings` SET `status` = '$text' WHERE `id` = '$_COOKIE[id]'");
}

function set_ava($db, $link, $id){
    mysqli_query($db, "UPDATE `settings` SET `avatar` = '$link' WHERE `id` = '$id'");
}
function get_ava($db, $id){
    $query = mysqli_query($db, "SELECT `avatar` FROM `settings` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    if($query[avatar] == ""){
        $res = "img/avatar.png";
    }else{
        $res = "img_user/".$query[avatar];
    }
    return $res;
}

function set_settings($db, $city, $name, $de, $gen, $st){
    mysqli_query($db, "UPDATE `settings` SET `city` = '$city', `sex` = '$gen', `prof` = '$de', `name` = '$name', `status` = '$st' WHERE `id` = '$_COOKIE[id]'");
}
function get_setings($db, $id){
    $query = mysqli_query($db, "SELECT * FROM `settings` WHERE `id` = '$id'");
    return mysqli_fetch_assoc($query);
}

function views_p($db, $v, $id){
    $v++;
    mysqli_query($db, "UPDATE `post` SET `views` = '$v' WHERE `id` = '$id'");
}
?>