<?php
include "/../function/fun.php";

if($_COOKIE[id] != ""){
    $query = mysqli_query($db, "SELECT `hash_sesion`,`login`,`password` FROM users WHERE `id` = '$_COOKIE[id]'");
    $query = mysqli_fetch_assoc($query);
    if($query[hash_sesion] != $_COOKIE[hash]){
    header("Location: exit");
    }
}
last_online($db,$_COOKIE[id]);
?>