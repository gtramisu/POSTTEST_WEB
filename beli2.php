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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beli Robux - Detail Pesanan</title>

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

  <main class="text-center">
    <h2>📦 Detail Pesanan (Langkah 2)</h2>

    <div class="card">
      <h3>Rincian Pesanan Anda</h3> 
      <table class="order-table">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>50 Robux</td><td>Rp6.000</td></tr>
          <tr><td>100 Robux</td><td>Rp12.000</td></tr>
          <tr><td>150 Robux</td><td>Rp18.000</td></tr>
          <tr><td>200 Robux</td><td>Rp24.000</td></tr>
          <tr><td>250 Robux</td><td>Rp30.000</td></tr>
          <tr><td>500 Robux</td><td>Rp60.000</td></tr>
          <tr><td>1000 Robux</td><td>Rp120.000</td></tr>
        </tbody>
      </table>
    
    <div class="total-pembayaran mt-2">
        <div class="summary-line">
            <p>Total Item</p>
            <p>1 Item</p>
        </div>
        <div class="summary-line">
            <p>Diskon</p>
            <p>Rp0</p>
        </div>
        <a href="beli3.html" class="total-button mt-2">
            <span>APAKAH ANDA YAKIN INGIN MEMBELI?</span>
        </a>
    </div>

    <div class="button-group mt-2" style="display: flex; justify-content: space-between;">
      <a href="beli1.html" class="btn btn-secondary">⬅️ Kembali</a>
      <a href="beli3.html" class="btn btn-primary">Lanjut Pembayaran ➡️</a>
    </div>
  </div>
</main>

<footer>
  <p>© 2025 Robuxify</p>
  <p>Referensi desain: <a href="https://golroblox.com/" target="_blank">golroblox.com</a></p>
</footer>
    
    <script src="script.js"></script>
</body>
</html>

