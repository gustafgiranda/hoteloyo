<?php
session_start();

// Mengganti dengan informasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Tangkap data dari formulir login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa data admin
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Memeriksa kata sandi
        if ($password == $admin["password"]) {
            // Autentikasi sukses, simpan informasi admin ke sesi
            $_SESSION['admin_id'] = $admin['id_admin'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_nama'] = $admin['nama'];

            // Redirect ke halaman admin setelah login sukses
            header('Location: hotel.html'); // Sesuaikan dengan halaman admin yang sesuai
            exit();
        } else {
            // Password tidak cocok
            $_SESSION['login_error'] = 'Username atau password salah.';
        }
    } else {
        // Admin tidak ditemukan
        $_SESSION['login_error'] = 'Username atau password salah';
    }
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login Form</title>
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
                        width: calc(100% - 16px);
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

                    .register-link {
                        text-align: center;
                        margin-top: 10px;
                    }

                    .register-link a {
                        color: #ff0000;
                        text-decoration: none;
                    }

                    .register-link a:hover {
                        text-decoration: underline;
                    }

                    .register-form {
                        margin-top: 10px;
                        display: none;
                    }

                    .show-register-form .register-form {
                        display: block;
                    }
                </style>
            </head>
            <body>

            <section id="admin-login" class="py-5">
        <div class="container">
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['login_error']; ?>
                </div>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
            <form action="hotel.html" method="POST">

            <form method="post" action="your_login_action_page.php">
                <h3>Login Form</h3>
                    
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="Enter your username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Enter your password"></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2"><button type="submit">Login</button></td>
                    </tr>
                </table>

            </form>

            </body>
            </html>
