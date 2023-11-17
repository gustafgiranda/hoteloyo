<?php
include 'conn2.php';
$id_petugas = $_GET['id'];
$data = mysqli_query($conn, "select * from petugas where id_petugas='$id_petugas'");
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

<form method="post" action="edit_aksi_petugash.php"><h3>EDIT PETUGAS<h3>
    <table>
        <tr>
            <td>ID_PETUGAS</td>
            <td><input type="number" name="id_petugas" value="<?php echo $tampil['id_petugas']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA_PETUGAS</td>
            <td><input type="text" name="nama_petugas" value="<?php echo $tampil['nama_petugas']; ?>"></td>
        </tr>
        <tr>
            <td>GENDER</td>
            <td><input type="text" name="gender" value="<?php echo $tampil['gender']; ?>"></td>
        </tr>
        <tr>
            <td>JABATAN</td>
            <td><input type="text" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">KIRIM</button></td>
        </tr>
    </table>
</form>

<?php } ?>
