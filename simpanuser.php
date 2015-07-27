<?php
include "koneksi.php";
mysql_query("insert into user values('$_POST[username]','$_POST[password]','$_POST[status]')");
header("location:index.php?user");
?>