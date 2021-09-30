<?php
session_start();
include 'database.php';
if (isset($_POST['login'])) {
    $db = new Database();
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $result = mysqli_query(
        $db->koneksi,
        "SELECT * FROM users WHERE username='$email' and password='$pass'"
    );
    $row = mysqli_num_rows($result);
    // var_dump($row);
    if ($row > 0) {
        $_SESSION['login'] = $pass;
        echo "<script type='text/javascript'>
        alert('Login Berhasil!')
            window.location = 'create.php'
        </script>";
        // ;
    } else {
       echo "<script type='text/javascript'>
        alert('Email atau Password Anda Salah!')
            window.location = 'login.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>membuat tampilan login</title>
<style>
body {
background-color : lightblue;
}
table {
    background-color : lightblue;
}
fieldset {
    background-color : blue
}
</style>
</head>
<body>


    
    <center><h1>Halaman Login</h1></center>
    <fieldset>
    <table>
    <h3>Login</h3>
    <tr>
        <form action="" method="post">
            <td><input type="email" placeholder="Masukan Email" name="email">
            <input type="password" placeholder="Masukan Password" name="password"></td>
            </tr>
        </form>
    </fieldset>
    </table>
    <br>
                <button type="submit" name="login">KIRIM</button>
</body>
</html>