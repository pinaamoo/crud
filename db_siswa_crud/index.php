<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: data_siswa.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="cek_login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required
            pattern="^[A-Za-z]+$" 
            oninvalid="this.setCustomValidity('Username hanya boleh huruf!')" 
            oninput="setCustomValidity('')"><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Role:</label>
        <select name="role">
            <option value="member" selected>Member</option>
            <option value="admin">Admin</option>
        </select><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
