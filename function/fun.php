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

function get_post($db, $theme, $l){
    $query = mysqli_query($db, "SELECT * FROM `post` WHERE `theme_id` = '$theme' LIMIT $l,25");
    return $query;
}

function get_post_1($db, $theme, $cat, $l){
    $query = mysqli_query($db, "SELECT * FROM `post` WHERE `theme_id` = '$theme' && `cat_id` = '$cat' LIMIT $l,25");
    return $query;
}

function get_all_post($db,$l){
    $query = mysqli_query($db, "SELECT * FROM `post` LIMIT $l,25");
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

function get_all_answ($db, $id){
    $query = mysqli_query($db, "SELECT * FROM `answ` WHERE `post_id` = '$id'");
    return $query;
}

function send_answ_post($db, $id_post, $auth, $msg){
    $t = time();
    mysqli_query($db, "INSERT INTO `answ` (`post_id`, `author`, `msg`, `date`) VALUES ('$id_post', '$auth', '$msg', '$t')");
    mysqli_query($db, "UPDATE `post` SET `last_update` = '$t' WHERE `id` = $id_post");
}

function parse_bb_code($text)	{
	$text = preg_replace('/\[(\/?)(b|i|u|s)\s*\]/', "<$1$2>", $text);
	
	$text = preg_replace('/\[code\]/', '<pre><code>', $text);
	$text = preg_replace('/\[\/code\]/', '</code></pre>', $text);
	
	$text = preg_replace('/\[(\/?)quote\]/', "<$1blockquote>", $text);
	$text = preg_replace('/\[(\/?)quote(\s*=\s*([\'"]?)([^\'"]+)\3\s*)?\]/', "<$1blockquote class='text-white border border-secondary p-2 rounded'>Цитата $4:<br>"."<i class='fas fa-angle-double-left fr text-muted font-weight-bold' style='font-size: 3em; margin-top: -25px;'></i>", $text);
	
	$text = preg_replace('/\[url\](?:http:\/\/)?([a-z0-9-.]+\.\w{2,4})\[\/url\]/', "<a href=\"http://$1\">$1</a>", $text);
	$text = preg_replace('/\[url\s?=\s?([\'"]?)(?:http:\/\/)?([a-z0-9-.]+\.\w{2,4})\1\](.*?)\[\/url\]/', "<a href=\"http://$2\">$3</a>", $text);
	
	$text = preg_replace('/\[img\s*\]([^\]\[]+)\[\/img\]/', "<img src='$1'/>", $text);
	$text = preg_replace('/\[img\s*=\s*([\'"]?)([^\'"\]]+)\1\]/', "<img src='$2'/>", $text);
    
    $text = preg_replace('#<script[^>]*>.*?</script>#is', '', $text);
    
	return $text;
}

function cout_msg($db, $id){
    $query = mysqli_query($db, "SELECT COUNT(1) FROM `answ` WHERE `author` = '$id'");
    return mysqli_fetch_assoc($query);
}

function get_last_answ($db, $id){
    return mysqli_query($db, "SELECT * FROM `answ` WHERE `author` = '$id' ORDER BY id DESC LIMIT 0,5");
}

function get_last_answ_h($db){
   return mysqli_query($db, "SELECT `id`,`title`,`author`,`last_update` FROM `post` ORDER BY `last_update` DESC LIMIT 0,5"); 
}

function get_title_post($db, $id){
    $query = mysqli_query($db, "SELECT `title` FROM `post` WHERE `id` = '$id'");
    return mysqli_fetch_assoc($query);
}

function set_social_net($db, $id, $vk, $skype, $telegram, $steam, $twitter){
    mysqli_query($db, "UPDATE `settings` SET `vk` = '$vk', `telegram` = '$telegram', `steam` = '$steam', `skype` = '$skype', `twitter` = '$twitter' WHERE `settings`.`id` = 1;");
}

function cout_answ($db,$id){
    $query = mysqli_query($db, "SELECT COUNT(1) FROM `answ` WHERE `post_id` = '$id'");
    return mysqli_fetch_assoc($query);
}

function last_user_answ($db, $id){
    return mysqli_query($db, "SELECT `date`,`author` FROM `answ` WHERE `post_id` = '$id' ORDER BY id DESC LIMIT 1"); 
}

function get_online($db, $id){
    $q = mysqli_query($db, "SELECT `last_online` FROM `users` WHERE `id` = '$id'");
    $q = mysqli_fetch_assoc($q);
    return $q[last_online];
}

function send_msg($db, $to_us, $from, $msg){
    $from = (int)$from;
    $to_us = (int)$to_us;
    $time = time();
    $msg = strip_tags($msg);
    mysqli_query($db, "INSERT INTO `messages` (`id`, `msg`, `from_user`, `to_user`, `unread`, `date`) VALUES (NULL, '$msg', '$from', '$to_us', '1', '$time')");
}


?>