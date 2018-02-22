<?php
include "../db/conn.php";
include "../function/fun.php";
set_status($db, $_POST[content]);
echo $_POST[content];


?>