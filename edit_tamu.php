<?php
include 'conn2.php';

$NIK = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM tamu WHERE NIK='$NIK'");
while ($tampil = mysqli_fetch_array($data)) {
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

    h3 {
        color: #ff0000;
        text-align: center;
        border-bottom: 2px solid #ff0000;
        padding-bottom: 10px;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: left;
        margin-top: 20px;
    }

    table {
        width: 100%;
    }

    table tr {
        margin-bottom: 10px;
    }

    table td {
        padding: 8px;
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
    <title>EDIT TAMU</title>
</head>
<body>

    <form method="post" action="edit_aksi_tamu.php">    <h3>EDIT TAMU</h3>
        <input type="hidden" name="NIK" value="<?php echo $tampil['NIK']; ?>">
        <table>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $tampil['NIK']; ?>" readonly></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
            </tr>
            <tr>
                <td>NO_TELPON</td>
                <td><input type="text" name="no_telp" value="<?php echo $tampil['no_telp']; ?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>STATUS</td>
                <td><input type="text" name="status" value="<?php echo $tampil['status']; ?>"></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td><input type="text" name="gender" value="<?php echo $tampil['gender']; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">KIRIM</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php } ?>
