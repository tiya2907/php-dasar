<?php 
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat);
echo "<br/>";
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);
echo "<br/>";
$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);
echo "<br/>";
$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);
?>