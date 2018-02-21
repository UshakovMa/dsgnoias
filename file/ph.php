<?php

// Пути загрузки файлов
$path = '/../img_user/';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
// Максимальный размер файла
$size = 1024000 * 2;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Проверяем тип файла
 if (!in_array($_FILES['avatar']['type'], $types))
  die('warning@Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

 // Проверяем размер файла
 if ($_FILES['avatar']['size'] > $size)
  die('warning@Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');

 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['avatar']['tmp_name'], $path . $_FILES['avatar']['name']))
  echo 'warning@Что-то пошло не так';
 else
 echo 'succes@Загрузка удачна <a href="' . $path . $_FILES['avatar']['name'] . '">Посмотреть</a> ' ;
}
?>