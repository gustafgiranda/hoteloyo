<?php
require "conn2.php";

$id_petugas = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = '$id_petugas'");

if ($query) {
    header("location: petugash.php");
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
