<?php 
//membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');
//menampilkan data array dengan nomor urut 2
echo $buah[2];
echo "<br/>";
//penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";
 
// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
echo "<br/>";
//membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');
//count() untuk menghitung isi array.
for($x=0;$x<count($buah);$x++){
	echo $buah[$x]."<br/>";
}
?>