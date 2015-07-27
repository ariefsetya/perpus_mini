<?php
session_start();
include "koneksi.php";
echo "
<html>
<head>
<title>Aplikasi Perpustakaan</title>
<link rel=\"stylesheet\" href=\"css/modern.css\">
</head>
<body class=\"modern-ui\" onload=\"prettyPrint()\">
<script type=\"text/javascript\" src=\"js/assets/jquery-1.9.0.min.js\"></script>
	";
?>
<style>
	.box{
	width:1000px;
	margin-left:auto;
	margin-right:auto;
	}
	.out{
	padding:20px;
	background-color:#2d89ef;
	width:150px;
	height:70px;
	position:fixed;
	bottom:0;
	right:-130;
	transition:right .5s;
	}
	.out:hover{
	right:-10;
	}
	.out a{
	font-size:30pt;
	font-family:Segoe UI Light;
	color:white;
	}
	.out a:hover{
	border-bottom:2px solid white;
	}
	
</style>

<?php
if(empty($_SESSION['username'])){
include "login.php";
}
else if(isset($_GET['out'])){
session_destroy();
echo "<div align=\"center\"><a href=\"index.php\"><h1><b>Klik dong</b></h1></a></div>";
}
else{
	echo "<div class=\"box\">";
	if(isset($_GET['index'])){
		include "indexnya.php";
	}
	else{
		include "menu_kecil.php";
		if(isset($_GET['buku'])){
			include "buku.php";
		}
		else if(isset($_GET['peminjaman'])){
			include "peminjaman.php";
		}
		else if(isset($_GET['pengembalian'])){
			include "pengembalian.php";
		}
		else if(isset($_GET['laporan'])){
			include "phplaporan.php";
		}
		else if(isset($_GET['user'])){
			include "phpuser.php";
		}
	}
	echo "</div>";
	echo "
<div class=\"out\">
<a href=\"?out\">Keluar</a>
</div>
</body>
</html>
";
}
?>
