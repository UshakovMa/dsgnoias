<?php
include "../db/conn.php";
if(!empty($_GET)){
    $code = $_GET[code];
    $email = mysqli_query($db, "SELECT `user_email` FROM `reg_tmp` WHERE `reg_tmp`.`hash` = '$code'");
    $query = mysqli_query($db, "DELETE FROM `reg_tmp` WHERE `reg_tmp`.`hash` = '$code'");
    $email = mysqli_fetch_assoc($email);
    if($query == 1){
        $query = mysqli_query($db, "UPDATE `users` SET `active` = '1' WHERE `email` = '$email[user_email]'");
        echo ok;
    }
}
?>