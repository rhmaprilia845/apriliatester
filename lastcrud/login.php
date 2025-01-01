<?php
      session_start();
include "koneksi_db.php";
  
        // date_default_timezone_set('Asia/Makassar');
        // include 'koneksi_db.php';
        // $username1 = "admin";
        // $password2 = "123";
        
        if(isset($_POST['login'])){
        
            $username = $_POST['username'];
            $password = $_POST['password'];

            // $sql = mysqli_query($koneksi, "SELECT * FROM tabel_admin WHERE username= '$username' && password = '$password'");
            // $rows = mysqli_num_rows($sql);
            if($username == "admin" && $password == "123"){
                $_SESSION['username'] = $username;
                header("Location : dashboard.php");
            } 
            else{
                header("Location : login.php");
            }
            
        }
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <h2>Sistem Administrasi Mahasiswa</h2>
        </div>

        <div class="kotaklogin">
             <div class="logo">
                <img src="icon/logounidayan.png" width="100px" alt="">
             </div>    
             <form action="login.php" method="POST">
             <div class="username">
                <label>Username</label><input type="text" name="username">
             </div>
             <div class="password">
                <label>Password</label><input type="password" name="password">
             </div>
             <button class="tombol_login" name="login">LOGIN</button>
             </form>
             <div class="tombol_register">
                <a href="">Belum Punya Akun ? Registrasi</a>
             </div>
          
            
        </div>

        <div class="footer">
            <p>Copyright &copy; Lab TI 2024</p>
        </div>

    </div>
</body>
</html>