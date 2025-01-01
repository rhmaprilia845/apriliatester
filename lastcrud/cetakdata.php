<?php
include 'koneksi_db.php';
$nomor = 1;
if(isset($_GET['cari'])){
    $nama = $_GET['nama'];

    $sql =mysqli_query($koneksi, "SELECT * FROM tabel_mahasiswa WHERE nama LIKE '%".$nama."%' ORDER BY id DESC");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @media print{
            button{
                display: none;
            }
        }
        </style>

</head>
<body>
            <h2 style="text-align: center; color:black;">Laporan Data Mahasiswa</h2>
            <button style="margin-left: 150px;" onclick="window.print()">Cetak</button>
            <table border="1" cellspacing="0" style="margin-left: 140px; margin-top:50px;">
                <thead>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>KELAS</th>
                    <th>FOTO</th>
                </thead>  
                
                <tbody>
                    <?php while($data = mysqli_fetch_array($sql)) { ?>
                    <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['nim']; ?></td>
                    <td><?= $data['kelas'] ; ?></td>
                    <td><img src="gambar/<?=  $data['foto']; ?>" widht="100" height="100"></td>
                    </tr>  
                    <?php $nomor++; } ?>
                </tbody>

            </table>


</body>
</html>