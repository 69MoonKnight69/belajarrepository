	<?php
	$bil1 = $_POST['txtbil1'];
	$bil2 = $_POST['txtbil2'];
	echo "Bilangan 1 : " . $bil1 . "<br>";
	echo "Bilangan 2 : " . $bil2 . "<br>";
	$tambah = $bil1 + $bil2;
	$kurang = $bil1 - $bil2;
	$kali = $bil1 * $bil2;
	$bagi = $bil1 / $bil2; 
echo "<h4>Hasil Perhitungan Aritmatika</h4>"; 
echo "Hasil Tambah : $tambah <br>";
echo "Hasil Kurang : $kurang <br>";
echo "Hasil Kali : $kali <br>"; 
echo "Hasil Bagi : $bagi <br>";
    