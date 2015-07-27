<?php
if($_GET['dey']=="sudah"){
	$data = "Laporan Peminjaman yang sudah dikembalikan";
	}
	else if($_GET['dey']=="belum"){
	$data = "Laporan Peminjaman yang belum dikembalikan";
	}
	else if($_GET['dey']=="all"){
	$data = "Laporan Peminjaman keseluruhan";
	}

echo "<h2>$data</h2>";	
?>
<table>
	<thead>
		<tr>
			<th>ID Peminjam</th>
			<th>Nama Peminjam</th>
			<th>Kode Buku</th>
			<th>Jumlah</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<?php
			if($_GET['dey']=="all"){
			?>
			<th>Sudah Kembali</th>
			<?php
			}
			?>
		</tr>
	</thead>
	<?php
	include "koneksi.php";
	if($_GET['dey']=="sudah"){
	$buku = mysql_query("select*from peminjaman where status_peminjaman='sudah'");
	}
	else if($_GET['dey']=="belum"){
	$buku = mysql_query("select*from peminjaman where status_peminjaman='belum'");
	}
	else if($_GET['dey']=="all"){
	$buku = mysql_query("select*from peminjaman");
	}
	while($rowbuku = mysql_fetch_array($buku)){
	?>
	<tbody>
		<tr>
			<td><?php echo $rowbuku['id_peminjam'];?></td>
			<td><?php echo $rowbuku['nama_peminjam'];?></td>
			<td><?php echo $rowbuku['kode_buku'];?></td>
			<td><?php echo $rowbuku['jumlah'];?></td>
			<td><?php echo $rowbuku['tanggal_pinjam'];?></td>
			<td><?php echo $rowbuku['tanggal_kembali'];?></td>
			<?php
			if($_GET['dey']=="all"){
			?>
			<td><?php echo $rowbuku['status_peminjaman'];?></td>
			<?php
			}
			?>
		</tr>
	</tbody>
	<?php
	}
	?>
</table>