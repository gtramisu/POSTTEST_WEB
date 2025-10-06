<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Robuxify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="rocket.png">
</head>
<body>
    <header class="header">
        <h1>Robuxify Dashboard</h1>
        <nav class="navbar">
            <a href="index.php">🏠 Beranda</a>
            <a href="dashboard.php?page=profil">👤 Profil</a>
            <a href="dashboard.php?page=setting">⚙️ Pengaturan</a>
            <a href="logout.php">🚪 Logout</a>
        </nav>
    </header>

    <main class="card text-center">
        <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>! 🎉</h2>
        <p>Kamu berhasil login ke Dashboard Robuxify.</p>
        <p>Query string saat ini: <b><?php echo htmlspecialchars($page); ?></b></p>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
