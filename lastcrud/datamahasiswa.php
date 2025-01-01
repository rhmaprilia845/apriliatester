<?php
    include 'koneksi_db.php';
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * FROM tabel_mahasiswa ORDER BY id DESC");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql= mysqli_query($koneksi, "DELETE FROM tabel_mahasiswa WHERE id='$id'");

        if($sql){
            echo "<script>alert('Data Berhasil Terhapus!');window.location='datamahasiswa.php';</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
                <a href="login.php"><img src="icon/logout.png" width="20px" title="Log Out"></a>
            </div>
        </div>
        <div class="main">

            <h3>Daftar Mahasiswa</h3>

            <a class="tambah_dt" href="tambahdata.php"><button class="tombol_tambah">+ Tambah Data</button></a>
            <form action="cetakdata.php" target="_blank" style="margin-left: -70px;">
                <div class="nama">
                   <label class="labelnama">Filter</label><input type="text" name="nama" style="background-color: skyblue;">
                   <form><button name="cari">Cetak</button>
                </div>
            </form>
            <table border="1" cellspacing="0">
                <thead>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>KELAS</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </thead>  
                
                <tbody>
                    <?php while($data = mysqli_fetch_array($sql)) { ?>
                    <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['nim'];?></td>
                    <td><?= $data['kelas'];?></td>
                    <td><img src="gambar/<?= $data['foto'];?>" width="50" height="50"></td>
                    <td class="td_aksi">
                        <ul type="none">
                            <li><a href="editdata.php?id=<?= $data['id'];?>" class="tombol_edit">Edit</a> </li>
                            <li><a href="datamahasiswa.php?id=<?= $data['id'];?>" class="tombol_hapus" onclick="return confirm('Yakin Ingin Menghapus Data?')">Hapus</a></li>
                        </ul>
                        
                    </td>
                    </tr>  
                    <?php $no++; } ?>        
                </tbody>

            </table>

        </div>

        <div class="footer">
            <p>Copyright &copy; Lab TI 2024</p>
        </div>

    </div>
</body>
</html>