<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Pendaftaran</title>
    <style>
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
    </style>
</head>
<body>
    <div class="wadah_flex"> 
        <div class="item">
            <div>
                <b style="font-size: 30px;">Pendaftaran</b>
            </div><br>
            <form action="proses_input.php" method="post">
                <div class="box-input">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="box-input">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="bawah">
                    <p>Punya akun? <a href="index.php">Log in</a> </p>
                </div><br>
                <div>
                    <a href="index.php">
                        <button type="submit" name="daftar" class="tombol_login">Daftar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>