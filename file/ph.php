<?php
include "../db/conn.php";
include "../function/fun.php";
// Пути загрузки файлов
$path = '../img_user/';
$tmp_path = '../tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
// Максимальный размер файла
$size = 1024000 * 2;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ty = explode('.',$_FILES['avatar']['name']);
 // Проверяем тип файла
 if (!in_array($_FILES['avatar']['type'], $types))
  header("location: ../bad.php?id='3'");

 // Проверяем размер файла
 if ($_FILES['avatar']['size'] > $size)
     header("location: ../bad.php?id='2'");

 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['avatar']['tmp_name'], $path.$f = time() ."_". $_COOKIE[id] .".".$ty[1]))
  header("location: ../bad.php?id='1'");
 else{
     set_ava($db, $f, $_COOKIE[id]);
    header("location: ../setting.php");}
}
?>