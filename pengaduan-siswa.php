<?php
session_start();
include 'koneksi.php';

$iduser = $_SESSION['id_user'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];
$status = 'menunggu';

$query = mysqli_query($koneksi, "INSERT INTO tbpengaduan (id_user, id_kategori, lokasi, keterangan, status) 
VALUES ('$iduser', '$kategori', '$lokasi', '$keterangan', '$status')");

if($query) 
    {
        header("location:pengaduan-siswa.php");
    }
    else 
    {
        echo "Data Gagal";
    }
?>
