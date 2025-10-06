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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran Berhasil - Robuxify</title>

    <link rel="icon" type="image/png" href="images/rocket.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Robuxify</h1>
        <nav class="navbar">
            <a href="index.html">🏠 Beranda</a>
            <a href="beli1.html">🛒 Beli Robux</a>
            <a href="cek-pesanan.html">📦 Cek Pesanan</a>
            <a href="bantuan.html">❓ Bantuan</a>
        </nav>
        <button id="theme-toggle" class="btn btn-secondary">☀️ Mode Gelap</button>
    </header>

    <main>
        <div class="success-card text-center">
            <h2>🎉 Pembayaran Berhasil!</h2>
            <p>Terima kasih sudah melakukan pembelian di <b>Robuxify</b>.</p>
            <p>Pesananmu sedang diproses ✅</p>
            <p>Robux akan masuk ke akunmu dalam waktu maksimal 24 jam.</p>
            <a href="index.html" class="btn btn-primary">⬅️ Kembali ke Beranda</a>
        </div>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
        <p>Referensi desain: <a href="https://golroblox.com/" target="_blank">golroblox.com</a></p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

