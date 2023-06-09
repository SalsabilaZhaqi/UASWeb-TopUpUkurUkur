<?php
// Memeriksa apakah form telah disubmit
if(isset($_POST['nominal']) && isset($_POST['harga'])) {
    $nominal = $_POST['nominal'];
    $harga = $_POST['harga'];
    $pembayaran = $_POST['pembayaran'];

    // Simpan data pembelian ke database
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'steam_wallet';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die('Koneksi database gagal: ' . mysqli_connect_error());
    }

    $query = "INSERT INTO pembelian (nominal, harga, pembayaran) VALUES ('$nominal', '$harga', '$pembayaran')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika penyimpanan berhasil, arahkan kembali ke halaman index.php
        header('Location: main.php');
        exit();
    } else {
        echo 'Terjadi kesalahan saat menyimpan data.';
    }

    mysqli_close($conn);
} else {
    // Jika form tidak disubmit, kembali ke halaman create.php
    header('Location: create.php');
    exit();
}
?>
