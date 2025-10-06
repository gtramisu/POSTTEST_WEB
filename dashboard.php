<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Robuxify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <h1>Robuxify</h1>
    <nav class="navbar">
        <a href="index.php">🏠 Beranda</a>
        <a href="beli1.php">🛒 Beli Robux</a>
        <a href="cek-pesanan.php">📦 Cek Pesanan</a>
        <a href="bantuan.php">❓ Bantuan</a>
        <a href="logout.php">🚪 Logout</a>
    </nav>
</header>
<main>
    <div class="card text-center">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?> 🎉</h2>
        <p>Anda berhasil login ke Dashboard Robuxify.</p>
        <a href="beli1.php" class="btn btn-primary">⚡ Mulai Beli Robux</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</main>
<footer>
    <p>© 2025 Robuxify</p>
</footer>
</body>
</html>


