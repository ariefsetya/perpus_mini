<?php
include "koneksi.php";
mysql_query("delete from daftar_buku where kode_buku='$_GET[det]'");
mysql_query("delete from stok_buku where kode_buku='$_GET[det]'");
header("location:index.php?buku");
?>