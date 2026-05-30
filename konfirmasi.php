<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - PASSUS SKENSA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="konfirmasi.css">
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="close-btn" onclick="closeMenu()">✕</div>
        <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#profil">Profil</a></li>
            <li><a href="index.php#syarat">Syarat</a></li>
            <li><a href="admin.php">Login Admin</a></li>
        </ul>
    </div>

    <!-- HEADER -->
    <header>
        <div class="container">
            <a href="index.php" class="logo-area">
                <img src="pkl.png" alt="Logo Kab">
                <img src="skensa.png" alt="Logo Sekolah">
                <div class="logo-text">
                    <h3>PASSUS SKENSA</h3>
                </div>
            </a>
            <div class="menu-btn" onclick="openMenu()">☰</div>
        </div>
    </header>

    <!-- CONTENT -->
    <main class="content">
        <div class="container" style="display: flex; justify-content: center;">
            <div class="card">
                <div class="success-icon">✔</div>
                <h1>Pendaftaran Terkirim!</h1>
                <p>Terima kasih telah mendaftar. Langkah selanjutnya, silakan scan atau simpan QR Code di bawah ini untuk bergabung ke <b>Grup WhatsApp Calon Anggota</b>.</p>
                
                <div class="qr-area">
                    <img src="grup.png" alt="QR Code Grup WhatsApp">
                    <span class="qr-label">Grup WA Calon Anggota</span>
                </div>

                <a href="index.php" class="btn-home">Kembali ke Beranda</a>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-info">
                    <h3>PASSUS SKENSA</h3>
                    <h3>JAYA</h3>
                </div>
                <div class="footer-links">
                    <h4>Sosial Media</h4>
                    <ul>
                        <li><a href="https://www.tiktok.com/@passusskensa"><strong>Tiktok</strong></a></li>
                        <li><a href="https://www.instagram.com/passusskensa"><strong>Instagram</strong></a></li>
                        <li><a href="https://whatsapp.com/channel/0029VbCQnWeCRs1lAA9dxN17"><strong>Channel</strong></a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Hubungi Kami</h4>
                    <p><strong>Alamat:</strong> Jl. Paesan Utara, RT.01/RW.05, Dusun Paesan, Kedungwuni Barat, Kec. Kedungwuni, Pekalongan</p>
                    <p><strong>Email:</strong> passusskensa@gmail.com</p>
                    <p><strong>No Telp:</strong> +62 857 4177 1410</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> PASSUS Indonesia. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>