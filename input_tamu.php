<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT TAMU</title>
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

    </style>
</head>
<body>
    <form action="tamu.php" method="post">
        
    <img src="input_logo.png" alt="Logo"><br><br><br><br>
    <label>NIK :</label>
        <input type="text" name="NIK" placeholder="Masukkan NIK..." required>
        <label></label>Nama :
        <input type="text" name="nama" placeholder="Masukkan nama..." required>
        Nomor Telepon :
        <input type="text" name="no_telp" placeholder="Masukkan no_telp..." required>
        <label>Alamat :</label>
        <input type="text" name="alamat" placeholder="Masukkan alamat..." required>
        <label>Status :</label>
        <input type="text" name="status" placeholder="Masukkan status..." required>
        <label>Gender :</label>
        <input type="text" name="gender" placeholder="Masukkan gender..." required>
        
        <button type="submit" name="kirim">KIRIM</button>
    </form>
</body>
</html>
