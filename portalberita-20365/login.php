<?php
session_start();

// Jika sudah login, langsung ke index
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

// Data user sederhana
$users = [
    "intan" => "123"
];

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['login'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login SKANSA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-container">

    <div class="login-box">
        <h2>LOGIN SKANSA NEWS</h2>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">LOGIN</button>
        </form>
        <div class="extra-links">
            <a href="lupasandi.php">Lupa kata sandi?</a><br>
            <a href="daftar.php">Belum punya akun? Daftar</a>
        </div>
    </div>

</body>

</html>