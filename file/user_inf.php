<?php
include "../db/conn.php";
include "../function/fun.php";
$gen = $_POST[gender];
$st = $_POST[status];
$city = $_POST[city];
$de = $_POST[de];
$name = $_POST[gname];
set_settings($db, $city, $name, $de, $gen, $st);
echo "success@Настройки сохранены";
?>