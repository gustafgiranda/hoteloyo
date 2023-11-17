<?php
include 'conn2.php';

$kode_booking = $_GET['id'];
$data = mysqli_query($conn, "select * from reservasi where kode_booking='$kode_booking'");
while ($tampil = mysqli_fetch_array($data)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT RESERVASI</title>
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
        margin: auto;
    }

    button:hover {
        background-color: #cc0000;
    }
</style>
</head>
<body>
    <form method="post" action="edit_aksi_reservasi.php"><h3>EDIT RESERVASI</h3>
        <input type="hidden" name="kode_booking" value="<?php echo $tampil['kode_booking']; ?>">
        <table>
            <tr>
                <td>KODE_BOOKING</td>
                <td><input type="text" name="kode_booking" value="<?php echo $tampil['kode_booking']; ?>"></td>
            </tr>
            <tr>
                <td>NO_KAMAR</td>
                <td><input type="text" name="no_kamar" value="<?php echo $tampil['no_kamar']; ?>"></td>
            </tr>
            <tr>
                <td>TGL_CHECKIN</td>
                <td><input type="date" name="tgl_checkin" value="<?php echo $tampil['tgl_checkin']; ?>"></td>
            </tr>
            <tr>
                <td>TGL_CHECKOUT</td>
                <td><input type="date" name="tgl_checkout" value="<?php echo $tampil['tgl_checkout']; ?>"></td>
            </tr>
            <tr>
                <td>TGL_BOOKING</td>
                <td><input type="date" name="tgl_booking" value="<?php echo $tampil['tgl_booking']; ?>"></td>
            </tr>
            <tr>
                <td>TIPE</td>
                <td><input type="text" name="tipe" value="<?php echo $tampil['tipe']; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">KIRIM</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php } ?>
