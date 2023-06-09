<?php
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query_sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $query_sql);
    if(mysqli_num_rows($result) > 0){
        header("location:main.php");
    } else {
        echo "<script language='javascript'>";
        echo "alert('User atau Password tidak sesuai');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    }
?>