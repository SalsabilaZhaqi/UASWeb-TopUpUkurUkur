<!DOCTYPE html>
<html>
<head>
    <title>Steam Wallet - Edit Pembelian</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <h1>Steam Wallet - Edit Pembelian</h1>

    <div class="container">
        <h2>Form Edit Pembelian</h2>
        <?php
        // Memeriksa apakah parameter id ada
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            // Mengambil data pembelian berdasarkan id dari database
            $db_host = 'localhost';
            $db_username = 'root';
            $db_password = '';
            $db_name = 'steam_wallet';

            $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

            if (!$conn) {
                die('Koneksi database gagal: ' . mysqli_connect_error());
            }

            $query = "SELECT * FROM pembelian WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <form action="update.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="text" name="nominal" id="nominal" value="<?php echo $row['nominal']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" value="<?php echo $row['harga']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="main.php" class="btn btn-secondary">Batal</a>
                </form>
                <?php
            } else {
                echo 'Data tidak ditemukan.';
            }

            mysqli_close($conn);
        } else {
            echo 'ID tidak valid.';
        }
        ?>
    </div>
</body>
</html>
