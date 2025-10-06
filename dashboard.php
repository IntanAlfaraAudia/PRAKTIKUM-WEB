<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php?error=Silakan login terlebih dahulu");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - JewelryBaru</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="dashboard" class="text-center">
            <div class="container">
                <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                <p>Ini adalah dashboard Anda. Anda telah berhasil login ke JewelryBaru Marketplace.</p>
                <a href="index.php" class="btn btn-primary" aria-label="Kembali ke Beranda">Kembali ke Beranda</a>
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