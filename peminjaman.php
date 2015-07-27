<?php
if(isset($_GET['kurang'])){
echo "<script>alert('Maaf, buku tidak cukup');</script>";
}
else if(isset($_GET['gagal'])){
echo "<script>alert('Maaf, buku tidak ada');</script>";
}
else if(isset($_GET['habis'])){
echo "<script>alert('Maaf, buku sudah habis');</script>";
}
?>
<style>
input,select{
height:31.5px;
font-size:12pt;
font-family:Segoe UI Light;
width:100%;
}
</style>
<div>
	<h2>Peminjaman Buku</h2>
	<form method="POST" action="pinjam.php">
	<table>
		<tr>
			<td>Nama Peminjam</td>
			<td><input required type="text" name="nama"></input></td>
		</tr>
		<tr>
			<td>Alamat Peminjam</td>
			<td><input required type="text" name="alamat"></input></td>
		</tr>
		<tr>
			<td>Status Member</td>
			<td><select required type="text" name="status">
			<option value="1">Anggota</option>
			<option value="0">Bukan Anggota</option>
			</select></td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td><select required type="text" name="kode">
			<?php
			$kode = mysql_query("select*from daftar_buku");
			while($rowkode = mysql_fetch_array($kode)){
			?>
			<option value="<?php echo $rowkode['kode_buku'];?>"><?php echo $rowkode['nama_buku'];?></option>
			<?php
			}
			?>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input required type="text" name="jumlah"></input></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
			<td><input required type="date" name="tglpinjam"></input></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td><input required type="date" name="tglkembali"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Pinjam</button></td>
		</tr>
	</table>
	</form>
	<label>Catatan : Denda dihitung dengan jumlah denda sebesar Rp. 1000,- perhari</label>
</div>