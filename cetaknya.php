<?php
include "koneksi.php";
$cah = mysql_query("select*from peminjaman where id_peminjam='$_GET[cetak]'");
$acah = mysql_fetch_array($cah);
?>
<style>
table tr td{
font-size:20pt;
padding:5px;
}
</style>
<div style="width:700px;margin-left:auto;margin-right:auto;">
<h1>Data Peminjaman</h1>
<table border="3" style="width:100%;border:8px solid #2d89ef;">
	<tr>
		<td width="300">ID Peminjaman</td>
		<td><?php echo $acah['id_peminjam'];?></td>
	</tr>
	<tr>
		<td>Nama Peminjam</td>
		<td><?php echo $acah['nama_peminjam'];?></td>
	</tr>
	<tr>
		<td>Alamat Peminjam</td>
		<td><?php echo $acah['alamat_peminjam'];?></td>
	</tr>
	<tr>
		<td>Kode Buku</td>
		<td><?php echo $acah['kode_buku'];?></td>
	</tr>
	<tr>
		<td>Jumlah Buku</td>
		<td><?php echo $acah['jumlah'];?></td>
	</tr>
</table>