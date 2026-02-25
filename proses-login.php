<?php
session_start();
include 'config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE username='$username'");

    if (mysqli_num_rows($query) > 0) {

        $data = mysqli_fetch_assoc($query);

        if ($password == $data['password']) {

            $_SESSION['id_user'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role'];

            if ($data['role'] == "Admin") {
                header("Location: /12rpl1_ujikom_quratu2/admin/admin.php");
            } 
            elseif ($data['role'] == "Siswa") {
                header("Location: /12rpl1_ujikom_quratu2/siswa/siswa.php");
            }
            exit();

        } else {
            echo "Password Salah!";
        }

    } else {
        echo "Username Tidak Ditemukan!";
    }
}
?>