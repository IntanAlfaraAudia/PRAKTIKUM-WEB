<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Proses form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validasi sederhana (contoh: username=admin, password=12345)
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=Username atau password salah");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - JewelryBaru</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <h1>JEWELRYBARU</h1>
            </div>
            <nav aria-label="Navigasi utama">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="index.php#collections">Koleksi</a></li>
                    <li><a href="index.php#keranjang">Keranjang</a></li>
                    <li><a href="index.php#checkout">Checkout</a></li>
                    <li><a href="index.php#about">Tentang Kami</a></li>
                    <li><a href="index.php#contact">Kontak</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="login" class="text-center">
            <div class="container">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
                <?php endif; ?>
                <form method="POST" action="login.php" aria-label="Formulir login">
                    <div class="mb-2">
                        <label for="username">Username</label><br>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required aria-required="true">
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required aria-required="true">
                    </div>
                    <button type="submit" class="btn btn-primary" aria-label="Login">Login</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container text-center">
            <p>&copy; 2025 JewelryBaru Marketplace. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>