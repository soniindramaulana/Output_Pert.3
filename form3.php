<?php
echo "BERIKUR ISI DARI FILE TAMBAHAN/SESSION: ";
echo "<br>";
session_start();
echo "Nama : ".$_SESSION["nama"];
echo "<br>";
echo "NIM : ".$_SESSION["nim"];
echo "<br>";
echo "Tinggi Badan : ".$_SESSION["tb"];
echo "<br>";
echo "Berat Badan : ".$_SESSION["bb"];
echo "<br>";
echo "Panggilan Pertama : ".$_SESSION["panggil1"];
echo "<br>";
echo "Panggilan Kedua : ".$_SESSION["panggil2"];
echo "<br>";
echo "Panggilan Ketiga : ".$_SESSION["panggil3"];
?>