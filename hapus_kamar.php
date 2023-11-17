<?php
require "conn2.php";

$no_kamar = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM kamar WHERE no_kamar = '$no_kamar'");

if ($query) {
    header("location: kamar.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
