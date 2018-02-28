<?php
include "../db/conn.php";
include "../check_acc/check.php";

echo parse_bb_code($_POST[msg]);

?>