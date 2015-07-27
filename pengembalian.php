<div>
<style>
input,select{
height:31.5px;
font-size:12pt;
font-family:Segoe UI Light;
width:100%;
}
</style>
	<?php
	$tgl = date("d");
	$bln = date("m");
	$thn = date("Y");
	?>
	<h2>Pengembalian Buku</h2>
	<form method="POST" action="kembali.php">
		<table>
			<tr>
				<td>Nama Peminjam</td>
				<td><select required type="text" name="kode">
				<?php
				$kode = mysql_query("select*from peminjaman where status_peminjaman='belum'");
				while($rowkode = mysql_fetch_array($kode)){
				$nm_buk = mysql_query("select*from daftar_buku where kode_buku='$rowkode[kode_buku]'");
				$rownm = mysql_fetch_array($nm_buk);
				?>
				<option value="<?php echo $rowkode['id_peminjam'];?>"><?php echo $rowkode['nama_peminjam']." (Buku : ".$rownm['nama_buku'].", Jumlah : ".$rowkode['jumlah'].")";?></option>
				<?php
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td>Tanggal Sekarang</td>
				<td><input type="text" disabled name="tglnow" value="<?php echo $thn."-".$bln."-".$tgl;?>"></input></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="simpan">Kembalikan</button></td>
			</tr>
		</table>
	</form>
</div>