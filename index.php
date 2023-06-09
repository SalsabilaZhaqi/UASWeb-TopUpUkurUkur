<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek kecocokan username dan password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: main.php");
        exit();
    } else {
        echo "Username atau password salah. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <style>
        .gambar {
            text-align: center;
        }
        .gambar img {
            margin-top: 110px;
            width: 200px;
        }
        body{
    margin: 0;
    padding: 0;
    background-color: #8EFF59;
    font-family: sans-serif;
}
.wadah_flex{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    background-color: rgb(240, 240, 240);
    height: auto;
}
.item {
    position: fixed;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px 20px 20px 20px;
    font-size: 24px;
    text-align: center;
    border-radius:15px;
    box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.3);
}
.box-input{
    display: flex;
    justify-content: center;
    width: 250px;
    margin: 10px;
    border-bottom: 3px solid black;
}
.box-input input{
    width: 85%;
    padding: 5px 0;
    background: none;
    border: none;
    outline: none;
    color: black;
    font-size: 18px;
}
.tombol_login {
    background-color: blue;
    color: aliceblue;
    padding: 8px 40px 8px 40px;
    border-radius: 10px;
    font-size: 15px;  
    text-decoration: none; 
}
.tombol_login:hover {
    background-color: rgb(0, 0, 148);
    color: black;
}
.tombol_batal {
    background-color: whitesmoke;
    color: black;
    padding: 8px 40px 8px 40px;
    border-radius: 10px;
    font-size: 15px;   
    text-decoration: none;
}
p{
    font-size: 12px;
    font-family: sans-serif;
}
    </style>
</head>
<body>
    <div class="wadah_flex">
        <div class="item">
            <div>
                <b style="font-size: 30px;">Login</b>
            </div><br>
            <form action="login_process.php" method="post">
                <div class="box-input">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="box-input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="bawah">
                    <p>Belum punya akun? <a href="register.php">Sign up</a> </p>
                </div><br>
                <div>
                    <a href="main.php">
                        <button type="submit" name="login" class="tombol_login">Login</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>