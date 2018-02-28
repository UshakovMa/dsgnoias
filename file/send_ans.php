<?php
include "../db/conn.php";
include "../check_acc/check.php";


if(!empty($_POST)){
    if($_COOKIE[id] == $_POST[id]){
        if($_POST[msg] != null || $_POST[msg] != ""){
            $pi = (int)$_POST[post_id];
            $id = (int)$_POST[id];
            send_answ_post($db, $pi, $id, $_POST[msg]);
            header("Location: ../post.php?id=$pi");
        }
    }
}

?>