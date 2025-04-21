<?php
session_start();
include 'koneksi.php'; // pastikan file koneksi database benar

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_login1 WHERE username='$username' AND password='$password' AND role='$role'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);
    
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    header("location: index.php");
} else {
    echo "<script>alert('Login gagal! Username atau password salah.'); window.location='login.php';</script>";
}
?>
