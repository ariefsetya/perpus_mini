<?php
include "koneksi.php";
$my = mysql_query("select*from daftar_buku where kode_buku='$_POST[kode]'");
$rowmy = mysql_fetch_array($my);
if(empty($rowmy[kode_buku])){
mysql_query("insert into daftar_buku values('$_POST[kode]','$_POST[nama]','$_POST[pengarang]','$_POST[kategori]')");
mysql_query("insert into stok_buku values('$_POST[kode]','$_POST[nomor]','$_POST[jumlah]')");
header("location:index.php?buku");
}
else{
	echo "<script>alert('Galat, buku sudah ada');</script>";
	echo "<meta name=\"refresh\" content=\"0;index.php?buku\">";
}

?>