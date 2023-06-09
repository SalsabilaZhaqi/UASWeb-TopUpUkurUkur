<!-- <?php
// session_start();
// include 'config.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

    // Cek kecocokan username dan password
//     $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//     $result = mysqli_query($conn, $query);

//     if (mysqli_num_rows($result) > 0) {
//         $_SESSION['username'] = $username;
//         header("Location: index.php");
//         exit();
//     } else {
//         echo "Username atau password salah. Silakan coba lagi.";
//     }
// }
// ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    /* style.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}

.form-container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
}

.form-container h2 {
    margin-top: 0;
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input {
    width: 100px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.btn-login,
.btn-register {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.btn-login:hover,
.btn-register:hover {
    background-color: #45a049;
}

.form-footer {
    margin-top: 20px;
    text-align: center;
}

.form-footer a {
    color: #4CAF50;
    text-decoration: none;
}

.form-footer a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form method="POST" action="login_process.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="REQUEST_METHOD" class="btn-login">Login</button>
                </div>
                <div class="form-footer">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html> -->
