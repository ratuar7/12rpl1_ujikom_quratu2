<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($query) > 0){

    $data = mysqli_fetch_assoc($query);

    // DEBUG sementara (hapus nanti)
    // echo "Password DB: ".$data['password'];

    if($password == $data['password']){

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if($data['role'] == "admin"){
            header("location: admin.php");
        } 
        else if($data['role'] == "siswa"){
            header("location: siswa.php");
        }
        exit();

    } else {
        echo "Password Salah!";
    }

} else {
    echo "Username Tidak Ditemukan!";
}
?>
