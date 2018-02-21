<?php
include "../db/conn.php";
if(!empty($_GET)){
    $code = $_GET[code];
    $email = mysqli_query($db, "SELECT `user_email` FROM `reg_tmp` WHERE `reg_tmp`.`hash` = '$code'");
    $query = mysqli_query($db, "DELETE FROM `reg_tmp` WHERE `reg_tmp`.`hash` = '$code'");
    $email = mysqli_fetch_assoc($email);
    if($query == 1){
        mysqli_query($db, "UPDATE `users` SET `active` = '1' WHERE `email` = '$email[user_email]'");
        $id = mysqli_query($db, "SELECT `id` FROM `users` WHERE `email` = '$email[user_email]'");
        $id = mysqli_fetch_assoc($id);
        mysqli_query($db, "INSERT INTO `settings` (`id`, `status`, `sex`, `avatar`) VALUES ('$id[id]', '', '', '')");
        header("location: ../index.php");
    }
}
?>