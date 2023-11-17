<?php
include 'conn2.php';

$kode_booking = $_POST['kode_booking'];
$no_kamar = $_POST['no_kamar'];
$tgl_checkin = $_POST['tgl_checkin'];
$tgl_checkout = $_POST['tgl_checkout'];
$tgl_booking = $_POST['tgl_booking'];
$tipe = $_POST['tipe'];

mysqli_query($conn, "UPDATE reservasi SET kode_booking='$kode_booking', no_kamar='$no_kamar', tgl_checkin='$tgl_checkin', tgl_checkout='$tgl_checkout', tgl_booking='$tgl_booking', tipe='$tipe' WHERE kode_booking='$kode_booking'");

header("location: reservasi.php");
?>
