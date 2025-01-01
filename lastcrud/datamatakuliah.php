<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
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

            <h3>Daftar Mata Kuliah</h3>

            <button class="tombol_tambah">+ Tambah Data</button>

            <table border="1" cellspacing="0">
                <thead>
                    <th>NO</th>
                    <th>MATA KULIAH</th>
                    <th>PEMINATAN</th>
                    <th>SEMESTER</th>
                    <th>AKSI</th>
                </thead>  
                
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Algoritma & Pemrograman Dasar</td>
                    <td>Software</td>
                    <td>I</td>
                    <td class="td_aksi">
                        <ul type="none">
                            <li><a href="" class="tombol_edit">Edit</a> </li>
                            <li><a href="" class="tombol_hapus">Hapus</a></li>
                        </ul>
                        
                    </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Aplikasi Komputer Kantor</td>
                        <td>Software</td>
                        <td>I</td>
                        <td class="td_aksi">
                        <ul type="none">
                            <li><a href="" class="tombol_edit">Edit</a> </li>
                            <li><a href="" class="tombol_hapus">Hapus</a></li>
                        </ul>
                        
                    </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Basis Data</td>
                        <td>Software</td>
                        <td>III</td>
                        <td class="td_aksi">
                        <ul type="none">
                            <li><a href="" class="tombol_edit">Edit</a> </li>
                            <li><a href="" class="tombol_hapus">Hapus</a></li>
                        </ul>
                        
                    </td>
                    </tr>
                    
           
                <tr>
                    <td>4</td>
                    <td>Pemrograman Visual NET</td>
                    <td>Software</td>
                    <td>IV</td>
                    <td class="td_aksi">
                        <ul type="none">
                            <li><a href="" class="tombol_edit">Edit</a> </li>
                            <li><a href="" class="tombol_hapus">Hapus</a></li>
                        </ul>
                        
                    </td>
                </tr>
                
    
            <tr>
                <td>5</td>
                <td>Sistem Kontrol</td>
                <td>Hardware</td>
                <td>V</td>
                <td class="td_aksi">
                        <ul type="none">
                            <li><a href="" class="tombol_edit">Edit</a> </li>
                            <li><a href="" class="tombol_hapus">Hapus</a></li>
                        </ul>
                        
                    </td>
            </tr>
    
   

                    
                </tbody>

            </table>

        </div>

        <div class="footer">
            <p>Copyright &copy; Lab TI 2024</p>
        </div>

    </div>
</body>
</html>