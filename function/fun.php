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
                        <div class='categories'>
                        <div class='cat1' style='min-width:  150px;'>";
                            get_category($db,$res[id],"1,3");
                        echo    "</div>
                        <div class='cat2' style='min-width:  150px;'>";
                        get_category($db,$res[id],"4,3");
                        echo  "</div>
                            <div class='cat3' style='min-width:  150px;'>";
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

function info_user($db,$id){
    $query = mysqli_query($db, "SELECT `date`,`login`,`last_online`,`verificate` FROM `users` WHERE `id` = '$id'");
    $query = mysqli_fetch_assoc($query);
    return $query;
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
?>