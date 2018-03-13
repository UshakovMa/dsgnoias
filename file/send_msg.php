<?php
include "../db/conn.php";
include "../check_acc/check.php";

if(!empty($_POST)){
        if($_POST[msg] != null || $_POST[msg] != ""){
            echo "success@успех";
            send_msg($db, $_POST[to], $_COOKIE[id], $_POST[msg]);
        }
}
?>