<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis',
alamat='$alamat' where id='$id'");
header("location:index.php");
?>