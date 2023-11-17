<?php
require "conn2.php";

$NIK = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM tamu WHERE NIK = '$NIK'");

if ($query) {
    header("location: tamu.php");
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
