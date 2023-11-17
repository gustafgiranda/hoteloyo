<?php
require 'conn2.php';

if(isset($_POST['kirim'])){
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $gender = $_POST['gender'];

    $query = mysqli_query($conn, "INSERT INTO petugas (id_petugas, nama_petugas, gender) VALUES ('$id_petugas', '$nama_petugas', '$gender')");

    if($query){
        header("location: petugash.php");
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
    <form action="" method="post">
    <img src="input_logo.png" alt="Logo"><br><br><br>
    <label>ID_Petugas :</label>
        <input type="number" name="id_petugas" placeholder="Masukkan id_petugas..." required>
        <label>Nama Petugas :</label>
        <input type="text" name="nama_petugas" placeholder="Masukkan nama_petugas..." required>
        <label>Gender :</label>
        <input type="text" name="gender" placeholder="Masukkan gender..." required>
        <label>Jabatan :</label>
        <input type="text" name="jabatan" placeholder="Masukkan jabatan..." required>
        <button type="submit" name="kirim">INPUTKAN PETUGAS</button>
    </form>
</body>
</html>
