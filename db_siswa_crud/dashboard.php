<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

echo "Selamat datang, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")";
?>
