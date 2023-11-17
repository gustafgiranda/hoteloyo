<?php
include 'conn2.php';

$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$gender = $_POST['gender'];

mysqli_query($conn, "UPDATE tamu SET nama='$nama', no_telp='$no_telp', alamat='$alamat', status='$status', gender='$gender' WHERE NIK='$NIK'");


header("location: tamu.php");
?>
