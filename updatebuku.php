<?php
include "koneksi.php";
if($_POST['kodeasli']==$_POST['kode']){
mysql_query("update daftar_buku set nama_buku='$_POST[nama]',pengarang='$_POST[pengarang]',kategori='$_POST[kategori]' where kode_buku='$_POST[kode]'");
mysql_query("update stok_buku set kode_buku='$_POST[kode]',nomor_rak='$_POST[nomor]',jumlah='$_POST[jumlah]'  where kode_buku='$_POST[kodeasli]'");

header("location:index.php?buku");
}
else if($_POST['kodeasli']!=$_POST['kode']){
$my = mysql_query("select*from daftar_buku where kode_buku='$_POST[kode]'");
$rowmy = mysql_fetch_array($my);
if(empty($rowmy[kode_buku])){
mysql_query("update daftar_buku set kode_buku='$_POST[kode]',nama_buku='$_POST[nama]',pengarang='$_POST[pengarang]',kategori='$_POST[kategori]' where kode_buku='$_POST[kodeasli]'");
mysql_query("update stok_buku set kode_buku='$_POST[kode]',nomor_rak='$_POST[nomor]',jumlah='$_POST[jumlah]'  where kode_buku='$_POST[kodeasli]'");
header("location:index.php?buku");
}
else{
	header("location:index.php?buku&ubah&det=".$_POST['kodeasli']);
}
}
?>