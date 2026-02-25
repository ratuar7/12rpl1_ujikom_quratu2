<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != "Siswa"){
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siswa</title>
</head>
<body>
    <h2>Halo, Saya Siswa</h2>
    <p>Username: <?= $_SESSION['username']; ?></p>
    <a href="logout.php">Logout</a>
    <a href="data_aspirasi.php">data aspirasi</a>
    <a href="form-pengaduan.php">form pengaduan</a>
    <a href="pengaduan-siswa.php">pengaduan siswa</a>
</body>
</html>