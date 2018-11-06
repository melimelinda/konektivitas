<?php 
	$conn = mysqli_connect("localhost","root","");
	mysql_select_db("daftartamu",$conn);
	$hasil =mysql_query("select * from bukutamu",$conn);
	$jumlah = mysql_num_rows($hasil);
	echo "<center>Daftar pengunjung</center>";
	echo "jumlah pengunjung : $jumlah";
	$a=1;
	while($baris = mysql_fetch_array($hasil))
	{
		echo "<br>";
		echo $a;
		echo "Nama : ";
		echo $baris[0];
		echo "<br>";
		echo "Email : ";
		echo $baris[1];
		echo "<br>";
		echo "Komentar : ";
		echo $baris[2];
	}
 ?>