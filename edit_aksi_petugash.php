<?php
include 'conn2.php';

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$gender = $_POST['gender'];
$jabatan = $_POST['jabatan'];

mysqli_query($conn, "UPDATE petugas SET id_petugas='$id_petugas', nama_petugas='$nama_petugas', gender='$gender', jabatan='$jabatan' WHERE id_petugas='$id_petugas'");

header("location: petugash.php");
?>
