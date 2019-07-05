<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/javafix.js"></script>
</head>
<body>
<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="nanang.html">Biodata</a></li>
			<li><a href="materi.html">Materi Kuliah</a></li>
			<li><a href="pencarian.html">Pencarian</a></li>
			<li><a href="lihat.php">Data Pengunjung</a></li>
		</ul>
</div>	

<div class="menu2">
	<center>
	<div class="jumbotron">

<?php
echo "<head><title>DATA Pengunjung</head></title>";
$fp = fopen("datapengunjung.txt","a+");
$nama = $_POST['nama'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$asal_kota = $_POST['asal_kota'];


fputs($fp,"$nama|$password|$jk|$alamat|$asal_kota\n");
fclose($fp);
echo "<br>";
echo " Terima Kasih Atas Partisipasi Anda dalam mengisi Form Pembayaran<br>";
echo "<a class=btn href=lihat.php> Data Pengunjung </a><br>";
echo "<a class=btn href=nanang.html> Lihat Profile </a><br> ";
?>
</div>
</div>

<div class="footer">
	
</div>

</body>
</html>