<?php
const host = "localhost";
const user = "root";
const pass = "";
const db = "myforum";

$db = mysqli_connect(host, user, pass, db);

if($db == false){
    exit("connection error");
}
?>