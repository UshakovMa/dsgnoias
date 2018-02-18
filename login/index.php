<?php
include '../function/fun.php';
include '../db/conn.php';
$pass = md5(md5($_POST["pass"]));
$el = $_POST[el];
vhod($el, $pass, $db);