<?php
require 'conn2.php';

if(isset($_POST['kirim'])){
    $kode_booking = $_POST['kode_booking'];
    $no_kamar = $_POST['no_kamar'];
    $tgl_checkin = $_POST['tgl_checkin'];
    $tgl_checkout = $_POST['tgl_checkout'];
    $tgl_booking = $_POST['tgl_booking'];
    $tipe = $_POST['tipe'];

    $query = mysqli_query($conn, "INSERT INTO reservasi (kode_booking, no_kamar, tgl_checkin, tgl_checkout, tgl_booking, tipe) VALUES ('$kode_booking', '$no_kamar', '$tgl_checkin', '$tgl_checkout', '$tgl_booking', '$tipe')");

    if($query){
              header("location: reservasi.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        img {
            width: 80%; /* 80% dari lebar elemen induk (form) */
            max-width: 200px; /* Maksimum lebar gambar */
            height: auto; /* Menjaga rasio aspek gambar */
            margin-right: 50px;
        float: right;
        margin-top: 5px;

        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #cc0000;
        }

    </style>
    <title>INPUT PETUGAS</title>
</head>
<body>
    <form action="input_reservasi.php" method="post">
    <img src="input_logo.png" alt="Logo"><br><br><br><br>

    <label>KODE_BOOKING :</label>
        <input type="text" name="kode_booking" placeholder="Masukkan kode_booking..." required>
        <label>NO KAMAR :</label>
        <input type="text" name="no_kamar" placeholder="Masukkan no_kamar..." required>
        <label>TANGGAL CHECKIN :</label>
        <input type="date" name="tgl_checkin" required>
        <label>TANGGAL CHECKOUT :</label>
        <input type="date" name="tgl_checkout" required>
        <label>TANGGAL BOOKING :</label>
        <input type="date" name="tgl_booking" required>
        <label>TIPE :</label>
        <input type="text" name="tipe" placeholder="Masukkan tipe..." required>
        
        <button type="submit" name="kirim">INPUTKAN RESERVASI</button>
    </form>
</body>
</html>
