<?php
    include 'koneksi_db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = mysqli_query($koneksi, "SELECT * FROM tabel_mahasiswa WHERE id= '$id'");
    
        $data = mysqli_fetch_array($sql);
        }

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $foto = $_FILES['foto']['name'];
        $foto_tmp =$_FILES['foto']['tmp_name'];

        if($foto != ""){
        move_uploaded_file($foto_tmp, 'gambar/' . $foto);

        $sql = mysqli_query($koneksi, "UPDATE tabel_mahasiswa SET nama= '$nama', nim = '$nim', kelas= '$kelas', foto = '$foto'
                            WHERE id= '$id'");

        if($sql){
            echo "<script>alert('Data Berhasil Tersimpan!');window.location='datamahasiswa.php';</script>";
        }
        } else{
            $sql = mysqli_query($koneksi, "UPDATE tabel_mahasiswa SET nama= '$nama', nim = '$nim', kelas= '$kelas'
                            WHERE id= '$id'");
                 if($sql){
                                echo "<script>alert('Data Berhasil Tersimpan!');window.location='datamahasiswa.php';</script>";
                            }
        }
       
        }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_tambahdata.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
  
    
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

            <h3>Edit Data Mahasiswa</h3>

            <div class="kotakinput">
                <form action="editdata.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value="<?= $id; ?>" hidden>
                <div class="nama">
                   <label class="labelnama">Nama</label><input class="inputnama" type="text" name="nama" value="<?= $data['nama']; ?>">
                </div>
                <div class="nim">
                   <label class="labelnim">NIM</label><input class="inputnim" type="text" name="nim" value="<?= $data['nim']; ?>">
                </div>
                <div class="kelas"> 
                <label class="labelkelas">Kelas</label>
                <select class="inputkelas" name="kelas">
                    <option selected><?= $data['kelas']; ?></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                 </div>
                 <div class="foto"> 
                 <label class="labelfoto">Foto</label><input class="inputfoto" type="file" name="foto" value="<?= $data['foto']; ?>"><br>
                 <img src="gambar/<?= $data['foto']; ?>" height="100" width="100">
                 </div>
                <button class="tombol_simpan" name="edit">Simpan</button>
   
            </form>
             
               
           </div>

        </div>

        <div class="footer">
            <p>Copyright &copy; Lab TI 2024</p>
        </div>

    </div>
</body>
</html>