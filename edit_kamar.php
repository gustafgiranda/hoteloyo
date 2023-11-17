<?php
include 'conn2.php';
$no_kamar = $_GET['id'];
$data = mysqli_query($conn, "select * from kamar where no_kamar='$no_kamar'");
while ($tampil = mysqli_fetch_array($data)) {
?>
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

<form method="post" action="edit_aksi_kamar.php"> <h3>EDIT KAMAR<h3>
    <table>
        <tr>
            <td>no_kamar</td>
            <td><input type="text" name="no_kamar" value="<?php echo $tampil['no_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>harga</td>
            <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
        </tr>
        <tr>
            <td>jumlah_kasur</td>
            <td><input type="number" name="jumlah_kasur" value="<?php echo $tampil['jumlah_kasur']; ?>"></td>
        </tr>
        <tr>
            <td>tipe</td>
            <td><input type="text" name="tipe" value="<?php echo $tampil['tipe']; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Kirim</button></td>
        </tr>
    </table>
</form>

<?php } ?>
