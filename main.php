<?php
session_start();

    // Cek apakah pengguna sudah login atau belum
    if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login.php
    // header("Location: login.php");
    // exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Steam Wallet - Pembelian</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <div class="header">
    <h1 style="text-align: center;">Top Up Ukur-Ukur 
    </h1>
    

    <div class="container">
            <h2>Selamat Datang di Website Top Up Steam wallet</h2>
            <p>Top up your Steam Wallet and enjoy gaming!</p>
            <a href="create.php" class="btn btn-primary">Tambah Pembelian</a>
        <div class="content">
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nominal</th>
                    <th>Harga</th>
                    <th>Metode Pembayaran</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                $db_host = 'localhost';
                $db_username = 'root';
                $db_password = '';
                $db_name = 'steam_wallet';

                $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

                if (!$conn) {
                    die('Koneksi database gagal: ' . mysqli_connect_error());
                }

                // Mengambil data pembelian dari database
                $query = "SELECT * FROM pembelian";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nominal'] . '</td>';
                    echo '<td>' . $row['harga'] . '</td>';
                    echo '<td>' . $row['pembayaran'] . '</td>';
                    echo '<td><a href="edit.php?id=' . $row['id'] . '" class="btn btn-edit">Edit</a>';
                    echo '<a href="delete.php?id=' . $row['id'] . '" class="btn btn-delete">Hapus</a></td>';
                    echo '</tr>';
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table><br><br><br>
        <div>
            <a href="index.php"><button type="submit" class="btn btn-delete">Logout</button></a>
        </div>
    </div>
</body>
</html>
