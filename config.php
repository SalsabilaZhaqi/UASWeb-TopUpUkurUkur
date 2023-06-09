<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "steam_wallet";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>