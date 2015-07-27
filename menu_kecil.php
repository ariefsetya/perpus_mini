<style>
.shortcut{
margin-top:0px;
width:152px;
height:50px;
margin-left:auto;
margin-right:auto;
}

.shortcut  > .icon {
  margin-top: .25em;
  margin-bottom: .25em;
font-size:15pt;
  color: #888;
}
.labelshort{
font-size:12pt;
}
</style>
<div align="center" style="margin-left:auto;margin-right:auto;margin-top:20px;height:100px;">
<a href="?index"><button class="shortcut">
	<span class="icon">
		<i class="icon-home"></i>
	</span>
	<span class="labelshort">
		Beranda
	</span>
</button></a>
<a href="?buku"><button class="shortcut">
	<span class="icon">
		<i class="icon-book"></i>
	</span>
	<span class="labelshort">
		Buku
	</span>
</button></a>
<a href="?peminjaman"><button class="shortcut">
	<span class="icon">
		<i class="icon-drawer"></i>
	</span>
	<span class="labelshort">
		Peminjaman
	</span>
</button></a>
<a href="?pengembalian"><button class="shortcut">
	<span class="icon">
		<i class="icon-drawer-2"></i>
	</span>
	<span class="labelshort">
		Pengembalian
	</span>
</button></a>
<?php
if($_SESSION['akses']==1){
?>
<a href="?user"><button class="shortcut">
	<span class="icon">
		<i class="icon-user"></i>
	</span>
	<span class="labelshort">
		Pengguna
	</span>
</button></a>
<?php
}
?>
<a href="?laporan"><button class="shortcut">
	<span class="icon">
		<i class="icon-copy"></i>
	</span>
	<span class="labelshort">
		Laporan
	</span>
</button></a>
</div>