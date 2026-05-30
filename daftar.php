<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PASSUS - Satria Mada Kasa</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="daftar.css">
</head>

<body>

    <div class="sidebar" id="sidebar">
        <div class="close-btn" onclick="closeMenu()">✕</div>

        <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#profil">Profil</a></li>
            <li><a href="index.php#syarat">Syarat</a></li>
            <li><a href="admin.php">Login Admin</a></li>
        </ul>
    </div>

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

    <section class="reg-hero">
        <div class="container">
            <h1>Formulir Pendaftaran</h1>
            <p>Isilah data diri Anda dengan benar untuk bergabung dengan PASSUS.</p>
        </div>
    </section>

    <div class="form-container">

        <form id="formDaftar">

            <div class="form-group">
                <label>Nomor Induk Siswa (NIS)</label>
                <input type="text" name="nis" maxlength="7" placeholder="Contoh: 24.0123" required>
            </div>

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label>Kelas & Jurusan</label>
                <input type="text" name="kelas_jurusan" placeholder="Contoh: X TKJ 3" required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>

                <select name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tempat, Tanggal Lahir</label>
                <input type="text" name="ttl" placeholder="Contoh: Pekalongan, 25 Juli 2010" required>
            </div>

            <div class="form-group">
                <label>Nomor WhatsApp</label>
                <input type="tel" name="wa" placeholder="08xxxxxxxxxx" required>
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea name="alamat" rows="3" placeholder="Masukkan alamat rumah lengkap" required></textarea>
            </div>

            <div class="form-group">
                <label>Alasan Ingin Masuk PASSUS</label>
                <textarea name="alasan" rows="3" placeholder="Tuliskan motivasi " required></textarea>
            </div>

            <button type="submit" class="btn-submit">
                <span>KIRIM PENDAFTARAN</span>
                <span class="icon-panah">→</span>
            </button>

        </form>

    </div>

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
    <script src="js/script.js"></script>

    <!-- ================= SUPABASE ================= -->
    <script type="module">

        import { createClient }
        from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'

        const supabaseUrl =
        'https://ydbulmagtgihrxxxqsmx.supabase.co'

        const supabaseKey =
        'sb_publishable_vZOuRgZG51J0vWzfdXQkvQ_EifaEX3J'

        const supabase = createClient(
            supabaseUrl,
            supabaseKey
        )

        const form = document.getElementById("formDaftar")

        form.addEventListener("submit", async (e) => {

            e.preventDefault()

            const formData = new FormData(form)

            const data = {

                NIS: formData.get("nis"),

                NAMA: formData.get("nama"),

                KELAS: formData.get("kelas_jurusan"),

                JK: formData.get("jk"),

                TTL: formData.get("ttl"),

                "NO WA": formData.get("wa"),

                ALAMAT: formData.get("alamat"),

                MOTIVASI: formData.get("alasan")
            }

            const { error } = await supabase
                .from("pe")
                .insert([data])

            if (error) {

                alert("Gagal menyimpan: " + error.message)
                console.log(error)

            } else {

                alert("Pendaftaran Berhasil Dikirim!")

                window.location.href = "konfirmasi.php"

            }

        })

    </script>

</body>
</html>