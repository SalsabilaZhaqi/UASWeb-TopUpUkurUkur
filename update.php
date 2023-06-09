<?php
// Memeriksa apakah form telah disubmit dan parameter id ada
if(isset($_POST['nominal']) && isset($_POST['harga']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $nominal = $_POST['nominal'];
    $harga = $_POST['harga'];

    // Update data pembelian di database
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'steam_wallet';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die('Koneksi database gagal: ' . mysqli_connect_error());
    }

    $query = "UPDATE pembelian SET nominal = '$nominal', harga = '$harga' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: main.php');
        exit();
    } else {
        echo 'Terjadi kesalahan saat memperbarui data.';
    }

    mysqli_close($conn);
} else {
    header('Location: edit.php');
    exit();
}
?>
