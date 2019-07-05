<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pweb</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Profil</a></li>
			<li><a href="nanang.html">Biodata Pembuat Web</a></li>
			<li><a href="materi.html">Materi</a></li>
			<li><a href="pencarian.html">Pencarian</a></li>
			<li><a href="lihat.php">Data Pengunjung</a></li>
		</ul>
</div>	

<div class="menu2">
	<center><h1>LIHAT DATA PENGUNJUNG</h1></center>
	<center>
		
<?php
echo "<head><title>DATA Pengunjung</title></head>";
$fp = fopen("datapengunjung.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama Pengunjung</td><td>: $pisah[0]</td></tr>";
echo "<tr><td>Password </td><td>: $pisah[1]</td></tr>";
echo "<tr><td>Jenis Kelamin </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>Alamat </td><td>: $pisah[3]</td></tr>";
echo "<tr><td>Asal Kota </td><td>: $pisah[4]</td></tr>";
}
echo "</table>";
echo "<a class=btn href=form.html> Isi Buku tamu </a>";
echo "<a class=btn href=biodata.html> Profile </a>";
?>
	</center>
</div>
<div class="footer">
		
</div>

</body>
</html>