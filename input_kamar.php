<?php
require 'conn2.php';

if(isset($_POST['kirim'])){
    $no_kamar = $_POST['no_kamar'];
    $harga = $_POST['harga'];
    $jumlah_kasur = $_POST['jumlah_kasur'];
    $tipe = $_POST['tipe'];

    $query = mysqli_query($conn, "INSERT INTO kamar (no_kamar, harga, jumlah_kasur, tipe) VALUES ('$no_kamar', '$harga', '$jumlah_kasur', '$tipe')");

    if($query){
        header("location: kamar.php");
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
    <title>Input Kamar</title>
</head>
<body>
    <form action="" method="post">
    <img src="input_logo.png" alt="Logo"><br><br><br>
    <label>Nomor_Kamar :</label>
        <input type="text" name="no_kamar" placeholder="Masukkan no_kamar..." required>
        <label>Harga :</label>
        <input type="number" name="harga" placeholder="Masukkan harga..." required>
        <label>Jumlah Kasur :</label>
        <input type="number" name="jumlah_kasur" placeholder="Masukkan jumlah_kasur..." required>
        <label>Tipe :</label>
        <input type="text" name="tipe" placeholder="Masukkan tipe ..." required>
        <button type="submit" name="kirim">Inputkan Kamar</button>
    </form>
</body>
</html>
