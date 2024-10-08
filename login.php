<?php
session_start(); 

if(isset($_SESSION['username']))
{
    header('Location: dasboard.php');
    exit();
}

$username = 'ali';
$password = '1234';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $ambil_username = $_POST['username'];
    $ambil_password = $_POST['password'];

  
    if ($ambil_password === $password) {
        $_SESSION['username'] = $ambil_username;
        echo "Login berhasil! Selamat datang, " . $_SESSION['username'];
        header('Location: dasboard.php');
    } else {
        echo "Password salah!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>