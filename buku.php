<?php
if(isset($_GET['buku']) and !isset($_GET['baru']) and !isset($_GET['ubah']) and !isset($_GET['hapus'])){
?>
<div>
	<?php
	if($_SESSION['akses']==1){
	?>
	<style>
	.editnya{
	height:31.5px;
	font-size:12pt;
	font-family:Segoe UI Light;
	padding:5px;
	width:100%;
	}
	</style>
	<div style="float:left">
	<a href="?buku&baru">Tambah Buku</a>
	</div>
	<div style="float:right">
	<form method="POST" action="">
	<input type="text" class="editnya" name="cari"></input>
	</form>
	</div>
	<div style="float:right">
	<label>Pencarian</label> 
	</div>
	
	<?php
	}
	?>
	<table>
		<thead>
			<tr>
				<th>Kode Buku</th>
				<th>Nama Buku</th>
				<th>Pengarang</th>
				<th>Kategori</th>
				<th>Nomor Rak</th>
				<th>Jumlah</th>
				<?php
				if($_SESSION['akses']==1){
				?>
				<th colspan=2>Pilihan</th>
				<?php
				}
				?>
			</tr>
		</thead>
		<?php
		if($_POST['cari']==""){
		$buku = mysql_query("select*from daftar_buku,stok_buku where daftar_buku.kode_buku=stok_buku.kode_buku");
		}
		else if($_POST['cari']!=""){
		$buku = mysql_query("select*from daftar_buku,stok_buku where daftar_buku.nama_buku like '%$_POST[cari]%' and daftar_buku.kode_buku=stok_buku.kode_buku or daftar_buku.kode_buku like '%$_POST[cari]%' and daftar_buku.kode_buku=stok_buku.kode_buku");
		}
		while($rowbuku = mysql_fetch_array($buku)){
		?>
		<tbody>
			<tr>
				<td><?php echo $rowbuku['kode_buku'];?></td>
				<td><?php echo $rowbuku['nama_buku'];?></td>
				<td><?php echo $rowbuku['pengarang'];?></td>
				<td><?php echo $rowbuku['kategori'];?></td>
				<td><?php echo $rowbuku['nomor_rak'];?></td>
				<td><?php echo $rowbuku['jumlah'];?></td>
				<?php
				if($_SESSION['akses']==1){
				?>
				<td><a href="?buku&ubah&det=<?php echo $rowbuku['kode_buku'];?>">Ubah</a></td>
				<td><a href="?buku&hapus&det=<?php echo $rowbuku['kode_buku'];?>">Hapus</a></td>
				<?php
				}
				?>
			</tr>
		</tbody>
		<?php
		}
		?>
	</table>
</div>
<?php
}
else if(isset($_GET['buku']) and isset($_GET['baru']) and $_SESSION['akses']==1){
?>
<style>
.editnya{
height:31.5px;
font-size:12pt;
font-family:Segoe UI Light;
padding:5px;
width:100%;
}
</style>
<div>
	<form method="POST" action="insertbuku.php">
	<table>
		<tr>
			<td>Kode Buku</td>
			<td><input class="input-control text editnya" type="text" name="kode"></input></td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td><input class="input-control text editnya" type="text" name="nama"></input></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input class="input-control text editnya" type="text" name="pengarang"></input></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input class="input-control text editnya" type="text" name="kategori"></input></td>
		</tr>
		<tr>
			<td>Nomor Rak</td>
			<td><input class="input-control text editnya" type="text" name="nomor"></input></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input class="input-control text editnya" type="text" name="jumlah"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><button style="float:right;" type="submit" name="simpan">Simpan</button></td>
		</tr>
	</table>
	</form>
</div>
<?php
}else if(isset($_GET['buku']) and isset($_GET['ubah']) and $_SESSION['akses']==1){
$uio = mysql_query("select*from daftar_buku, stok_buku where daftar_buku.kode_buku='$_GET[det]' and stok_buku.kode_buku='$_GET[det]'");
$re = mysql_fetch_array($uio);
?>

<style>
.editnya{
height:31.5px;
font-size:12pt;
font-family:Segoe UI Light;
padding:5px;
width:100%;
}
</style>
<div>
	<form method="POST" action="updatebuku.php">
	<table>
	<input class="input-control text editnya" type="hidden" name="kodeasli" value="<?php echo $re['kode_buku'];?>"></input>
		<tr>
			<td>Kode Buku</td>
			<td><input class="input-control text editnya" type="text" name="kode" value="<?php echo $re['kode_buku'];?>"></input></td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td><input class="input-control text editnya" type="text" name="nama" value="<?php echo $re['nama_buku'];?>"></input></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input class="input-control text editnya" type="text" name="pengarang" value="<?php echo $re['pengarang'];?>"></input></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input class="input-control text editnya" type="text" name="kategori" value="<?php echo $re['kategori'];?>"></input></td>
		</tr>
		<tr>
			<td>Nomor Rak</td>
			<td><input class="input-control text editnya" type="text" name="nomor" value="<?php echo $re['nomor_rak'];?>"></input></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input class="input-control text editnya" type="text" name="jumlah" value="<?php echo $re['jumlah'];?>"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><button style="float:right;" type="submit" name="simpan">Perbarui</button></td>
		</tr>
	</table>
	</form>
</div>
<?php
}else if(isset($_GET['buku']) and isset($_GET['hapus']) and $_SESSION['akses']==1){
?>
<a href="deletebuku.php?det=<?php echo $_GET['det'];?>"><i class="icon-thumbs-up"></i>Saya yakin ingin menghapus buku ini</a><br />
<a href="index.php?buku"><i class="icon-thumbs-down"></i>Saya tidak yakin ingin menghapus buku ini</a>
<?php
}
?>