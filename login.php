<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Autentikasi sederhana
    $user_valid = "admin";
    $pass_valid = "12345";

    if ($username === $user_valid && $password === $pass_valid) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "❌ Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Robuxify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="rocket.png">
</head>
<body>
    <header class="header">
        <h1>Robuxify</h1>
        <nav class="navbar">
            <a href="index.php">🏠 Beranda</a>
            <a href="beli1.php">🛒 Beli Robux</a>
            <a href="cek-pesanan.php">📦 Cek Pesanan</a>
            <a href="bantuan.php">❓ Bantuan</a>
        </nav>
    </header>

    <main class="form-card text-center">
        <h2>🔐 Login ke Robuxify</h2>
        <p>Masukkan username dan password kamu</p>

        <?php if(isset($error)) echo "<p style='color:red;font-weight:bold;'>$error</p>"; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p style="margin-top:15px;">Gunakan <b>admin / 12345</b> untuk login demo.</p>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
