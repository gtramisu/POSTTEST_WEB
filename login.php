<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '123') {
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
</head>
<body>
<header class="header">
    <h1>Robuxify</h1>
    <nav class="navbar">
        <a href="index.php">🏠 Beranda</a>
        <a href="bantuan.php">❓ Bantuan</a>
    </nav>
</header>
<main>
    <div class="form-card">
        <h2 class="text-center">Login</h2>
        <?php if (!empty($error)) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</main>
<footer>
    <p>© 2025 Robuxify</p>
</footer>
</body>
</html>
