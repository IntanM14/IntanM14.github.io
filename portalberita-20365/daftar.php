<?php
session_start();

if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $success = "Akun berhasil dibuat! Silakan login.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-container">

    <div class="login-box">
        <h2>DAFTAR AKUN</h2>

        <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Username baru" required>
            <input type="password" name="password" placeholder="Password baru" required>
            <button type="submit" name="daftar">DAFTAR</button>
        </form>

        <a href="login.php">Sudah punya akun? Login</a>
    </div>

</body>

</html>