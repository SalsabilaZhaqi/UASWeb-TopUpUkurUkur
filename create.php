<!DOCTYPE html>
<html>
<head>
    <title>Steam Wallet - Tambah Pembelian</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <h1>Steam Wallet - Tambah Pembelian</h1>

    <div class="container">
        <h2>Form Tambah Pembelian</h2>
        <form action="store.php" method="post">
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" name="nominal" id="nominal" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" required>
            </div>
            <div class="form-group">
                <label for="pembayaran" style="font-weight: bold; padding-bottom: 10px;"> Pilih pembayaran </label>
                <select name="pembayaran" id="pembayaran" style="width: 52%; height: 25px">pilih pembayaran
                <option value="Dana">Dana</option>
                <option value="BCA"> Gopay</option>
                <option value="BCA"> BCA</option>
                <option value="BCA"> BRI</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="main.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
