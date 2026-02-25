<?php
session_start();
include '../config/koneksi.php';

/* ======================
   CEK LOGIN
====================== */
if (!isset($_SESSION['id_user'])) {
    header("Location: ../login.php");
    exit;
}

/* ======================
   CEK SUBMIT FORM
====================== */
if (isset($_POST['submit'])) {

    $iduser     = $_SESSION['id_user'];
    $kategori   = $_POST['kategori'];
    $lokasi     = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];
    $status     = 'Menunggu';

    $query = mysqli_query($koneksi, "
        INSERT INTO tbpengaduan 
        (id_user, id_kategori, lokasi, keterangan, status) 
        VALUES 
        ('$iduser', '$kategori', '$lokasi', '$keterangan', '$status')
    ");

    if ($query) {
        header("Location: pengaduan-siswa.php");
        exit;
    } else {
        echo "Data Gagal: " . mysqli_error($koneksi);
    }
} else {
    echo "Form belum disubmit!";
}
?>