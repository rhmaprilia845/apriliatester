<?php
include "status_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <div class="sidebar">
            <div class="logo">
                <img src="icon/logounidayan.png" width="70px">
            </div>
            
            <img src="icon/icondashboard.png" width="20px"><a href="dashboard.php">Dashboard</a>
            <img src="icon/iconmahasiswa.png" width="20px"> <a href="datamahasiswa.php"> Data Mahasiswa</a>
            <img src="icon/iconmatakuliah.png" width="20px"><a href="datamatakuliah.php"> Data Mata Kuliah</a>
        </div>

        <div class="header">
            <h2>Sistem Administrasi Mahasiswa</h2>
            <div class="pencarian">
            <input type="text" placeholder="Cari Data...">
            </div>
            <div class="keluar">
            <a href="logout.php"><img src="icon/logout.png" width="20px" title="Log Out"></a>
            </div>
        </div>

        <div class="main2">

            <div class="paragrafutama">
                <p>Selamat Datang Di Sistem Administrasi Mahasiswa!</p>
            </div>
            <div class="kotakluar">
                <div class="kotak1">
                    <img src="icon/iconmahasiswa.png" width="100px"><p>Jumlah Mahasiswa</p>
                    <h1>10</h1>
                </div>
                <div class="kotak2">
                    <img src="icon/iconmatakuliah.png" width="100px"><p>Jumlah Matakuliah</p>
                   <h1>10</h1> 
             </div>
            </div>

        </div>

        <div class="footer">
            <p>Copyright &copy; Lab TI 2024</p>
        </div>

    </div>
</body>
</html>