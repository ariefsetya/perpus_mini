<?php
include "koneksi.php";

$select = mysql_query("select*from user where username='$_POST[username]' and password='$_POST[password]'");
$data = mysql_num_rows($select);
$dat = mysql_fetch_array($select);
if($data > 0){
session_start();
session_register("username");
session_register("password");
session_register("akses");
$_SESSION['username']=$dat['username'];
$_SESSION['password']=$dat['password'];
$_SESSION['akses']=$dat['akses'];

header("location:index.php?index");
}
else{

header("location:index.php");
}
?>