<?php
include "koneksi.php";
echo "<link rel=\"stylesheet\" href=\"css/modern.css\">";

$data = mysql_query("select*from peminjaman where id_peminjam='$_POST[kode]'");
$hasil = mysql_fetch_array($data);
if($hasil['status_peminjaman']=="belum")
{
	$tgl = date("d");
	$bln = date("m");
	$thn = date("Y");

$tgl1 = $hasil['tanggal_kembali'];
$tgl2 = $thn."-".$bln."-".$tgl;

$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];


$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];

$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);

$selisih = $jd2 - $jd1;
if($selisih > 0){
$denda = $selisih*1000;

?>
<div style="width:1000px;margin-left:auto;margin-right:auto;">
<h1>Denda Rp. <?php echo $denda;?></h1>
<h2><a href="index.php?buku">Kembali ke Buku</a></h2>
</div>
<?php


}
else{
?>
<div style="width:1000px;margin-left:auto;margin-right:auto;">
<h1>Tidak kena Denda</h1>
<h2><a href="index.php?buku">Kembali ke Buku</a></h2>
</div>
<?php
}

mysql_query("update peminjaman set denda='$denda', buku_kembali='$tgl2', status_peminjaman='sudah' where id_peminjam='$_POST[kode]'");
mysql_query("update stok_buku set jumlah=jumlah+'$hasil[jumlah]' where kode_buku='$hasil[kode_buku]'");
}
else
{
?>
<div style="width:1000px;margin-left:auto;margin-right:auto;">
<h1>Buku Sudah Dikembalikan</h1>
<h2><a href="index.php?buku">Kembali ke Buku</a></h2>
</div>
<?php
}
?>