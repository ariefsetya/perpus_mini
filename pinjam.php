<?php
include "koneksi.php";
if(empty($_POST['nama'])){
echo "Data tidak ada";
}else{
$coun = mysql_query("select*from stok_buku where kode_buku='$_POST[kode]'");
$isi = mysql_fetch_array($coun);
if(empty($isi['kode_buku'])){
header("location:index.php?peminjaman&gagal");
}
else if($isi['jumlah']==0){
header("location:index.php?peminjaman&habis");
}
else if($_POST['jumlah']>$isi['jumlah']){
header("location:index.php?peminjaman&kurang");
}
else
{

echo "<link rel=\"stylesheet\" href=\"css/modern.css\">";
mysql_query("insert into peminjaman values('','$_POST[nama]','$_POST[alamat]','$_POST[kode]','$_POST[jumlah]','$_POST[status]','$_POST[tglpinjam]','$_POST[tglkembali]','','','belum')");
mysql_query("update stok_buku set jumlah=jumlah-'$_POST[jumlah]' where kode_buku='$_POST[kode]'");
$cah = mysql_query("select*from peminjaman order by id_peminjam desc");
$acah = mysql_fetch_array($cah);
?>
<div style="width:1000px;margin-left:auto;margin-right:auto;">
<h1>Data Peminjaman</h1>
<table>
	<tr>
		<td>ID Peminjaman</td>
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
	<tr>
		<td>Cetak</td>
		<td><a target="_blank" href="cetak.php?cetak=<?php echo $acah['id_peminjam'];?>">PDF</a></td>
	</tr>
	
</table>
<div style="margin-left:600px;">
<a href="index.php?buku"><h1>Kembali ke Buku</h1></a>
</div>
</div>
<?php
}
}
?>