<?php
include 'conn2.php';

$no_kamar = $_POST['no_kamar'];
$harga = $_POST['harga'];
$jumlah_kasur = $_POST['jumlah_kasur'];
$tipe = $_POST['tipe'];

mysqli_query($conn, "UPDATE kamar SET no_kamar='$no_kamar', harga='$harga', jumlah_kasur='$jumlah_kasur', tipe='$tipe' WHERE no_kamar='$no_kamar'");

header("location: kamar.php");
?>
