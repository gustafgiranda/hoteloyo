<?php
require 'conn2.php';

$query = mysqli_query($conn, "select * from kamar");
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

    <title>Daftar Kamar</title>
        <style>
    body {
        background: url('https://images.oyoroomscdn.com/uploads/hotel_image/55951/7335564f886b49a5.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    nav a:hover {
                background-color: #ff0000;
                color: yellow;  
            }
    table {
        width: 70%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        overflow: hidden;
    }
    table thead tr{
        background: rgba(255,0,0,0.7);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #FF0000;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        display: inline-block;
        padding: 8px 16px;
        text-decoration: none;
        background-color: #FF0000;
        color: white;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #FF3333;
    }

    a:active {
        background-color: #990000;
    }

    .add-button {
        display: block;
        margin-top: 20px;
        text-align: center;
        bottom: 50px;
    }
    

        </style>
</head>
<body>
    <table border="1">
        <thead>
        <tr>
            <td>NOMOR KAMAR</td>
            <td>HARGA</td>
            <td>JUMLAH KASUR</td>
            <td>TIPE</td>   
            <td>ACTION</td>
        </tr>
        </thead>
        <tbody>
        <?php while ($value = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $value["no_kamar"] ?></td>
                <td><?= $value["harga"] ?></td>
                <td><?= $value["jumlah_kasur"] ?></td>
                <td><?= $value["tipe"] ?></td>
                <td>
                    <a href="hapus_kamar.php?id=<?= $value["no_kamar"] ?>">Hapus</a>
                    <a href="edit_kamar.php?id=<?= $value["no_kamar"] ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="input_kamar.php">TAMBAHKAN KAMAR</a>
</body>
</html>
