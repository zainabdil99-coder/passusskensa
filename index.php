<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSUS - Satria Mada Kasa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>

<div class="sidebar" id="sidebar">
    <div class="close-btn" onclick="closeMenu()">✕</div>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#profil">Profil</a></li>
        <li><a href="#syarat">Syarat</a></li>
       <li><a href="login.php">Login</a></li>
    </ul>
</div>

<header>
    <div class="logo-area">
        <img src="pkl.png" alt="Logo Kab">
        <img src="skensa.png" alt="Logo Sekolah">
        <div class="logo-text">
            <h3>PASSUSSKENSA</h3>
        </div>
    </div>
    <div class="menu-btn" onclick="openMenu()">☰</div>
</header>

<section class="hero" id="home">
    <h1>Selamat Datang<br>Calon Anggota<br>PASSUS</h1>
    <p>Bergabunglah bersama kami dalam membentuk generasi muda yang disiplin, bertanggung jawab, berahlak mulia, cinta tanah air dan berprestasi.</p>
    <div class="hero-buttons">
        <a href="daftar.php" class="btn-putih">DAFTAR SEKARANG</a>
    </div>
    <div class="logo-besar">
        <img src="passus jaya.png" alt="Logo Passus">
        <h1>PASSUS</h1>
    </div>
</section>

<section class="profil" id="profil">
    <div class="label">PROFIL PASSUS</div>
    <h2>Apa itu<br>PASSUS?</h2>
    <p>
        PASSUS dibentuk untuk menanamkan rasa disiplin, tanggung jawab, dan 
        jiwa kepemimpinan kepada para anggotanya. 
        Nama gelar PASSUS yaitu <strong>Satria Mada Kasa</strong> yang artinya
        Satria (pemuda), Mada (generasi), dan Kasa (hebat, tangguh, perkasa).
    </p>
</section>

<section class="syarat" id="syarat">
    <div class="syarat-header">
        <h2>SYARAT<br>PENDAFTARAN</h2>
    </div>
    <div class="syarat-list">
        <div class="syarat-item merah">
            <div class="garis"></div>
            <div class="icon">📄</div>
            <div class="isi">
                <h3>Siswa/Siswi Aktif</h3>
                <p>Merupakan siswa aktif di lingkungan sekolah.</p>
            </div>
        </div>
        <div class="syarat-item kuning">
            <div class="garis"></div>
            <div class="icon">🏃</div>
            <div class="isi">
                <h3>Sehat Jasmani</h3>
                <p>Mampu mengikuti kegiatan fisik dan latihan rutin.</p>
            </div>
        </div>
        <div class="syarat-item biru">
            <div class="garis"></div>
            <div class="icon">❤</div>
            <div class="isi">
                <h3>Nasionalisme</h3>
                <p>Siap menjaga disiplin dan cinta tanah air.</p>
            </div>
        </div>
        <div class="syarat-item hijau">
            <div class="garis"></div>
            <div class="icon">⏰</div>
            <div class="isi">
                <h3>Bertanggung Jawab</h3>
                <p>Siap mengikuti segala kegiatan dengan penuh tanggung jawab.</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-info">
            <h3>PASSUSSKENSA</h3>
            <h3>JAYA</h3>
        </div>
        <div class="footer-links">
            <h4>Sosial Media</h4>
            <ul>
                <li><a href="https://www.tiktok.com/@passusskensa?_r=1&_t=ZS-96RBIqBUyvM"><strong>Tiktok</strong></a></li>
                <li><a href="https://www.instagram.com/passusskensa?igsh=b3UyeTU0ZHU3bnky"><strong>Instagram</strong></a></li>
                <li><a href="https://whatsapp.com/channel/0029VbCQnWeCRs1lAA9dxN17"><strong>Chanel</strong></a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Hubungi Kami</h4>
            <p><strong>Alamat:</strong> Jl. Paesan Utara, RT.01/RW.05, Dusun Paesan, Kedungwuni Barat, Kec. Kedungwuni, Kab. Pekalongan, Jawa Tengah</p>
            <p><strong>Email:</strong> passusskensa@gmail.com</p>
            <p><strong>No Telpon:</strong> +62 857 4177 1410</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> PASSUSSKENSA </p>
    </div>
</footer>

    <script src="script.js">
    </script>

</body>
</html>