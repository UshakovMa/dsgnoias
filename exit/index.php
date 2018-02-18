<?php
include "../db/conn.php";
mysqli_query($db, "UPDATE `users` SET `hash_sesion` = '' WHERE `id` = '$_COOKIE[id]'");
setcookie("id", "", time-3600*24*30,"/");
setcookie("hash", "", time-3600*24*30,"/");
header("Location: ../index.php");