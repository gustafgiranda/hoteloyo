<?php
require "conn2.php";

$kode_booking = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM reservasi WHERE kode_booking = '$kode_booking'");

if ($query) {
    header("location: reservasi.php");
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
