<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_siswa (nama, nis, alamat) values('$nama','$nis','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>