<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - PASSUS Satria Mada Kasa</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <div class="sidebar" id="sidebar">
        <div class="close-btn" onclick="closeMenu()">✕</div>
        <ul>
            <li><a href="admin.php">Data Pendaftar</a></li>
            <li><a href="daftar.php">Buka Form Pendaftaran</a></li>
            <li><a href="logout.php" onclick="return confirm('Apakah Anda ingin logout?')">Logout dari Admin</a></li>
        </ul>
    </div>

    <header>
        <div class="container">
            <a href="admin.php" class="logo-area">
                <img src="pkl.png" alt="Logo Kab">
                <img src="skensa.png" alt="Logo Sekolah">
                <div class="logo-text">
                    <h3>PASSUS SKENSA - ADMIN</h3>
                </div>
            </a>
            <div class="menu-btn" onclick="openMenu()">☰</div>
        </div>
    </header>

    <section class="admin-hero">
        <div class="container">
            <h1>Halaman Panel Kontrol</h1>
            <p>Selamat Datang Admin! Di sini Anda dapat memantau, mengubah, dan menghapus data pendaftar.</p>
        </div>
    </section>

    <div class="container">
        <div class="table-container">

            <div class="table-header-flex">
                <h2>Daftar Calon Anggota Baru</h2>
            </div>

            <div class="table-wrapper">

                <table>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>JK</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>No WhatsApp</th>
                            <th>Alamat Rumah</th>
                            <th>Motivasi / Alasan</th>
                            <th>Aksi Administrasi</th>
                        </tr>
                    </thead>

                    <tbody id="data-pendaftar">
                        <tr>
                            <td colspan="9" style="text-align:center; font-weight:600; padding:30px;">
                                Memuat data...
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
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

    <script type="module">

    import { createClient }
    from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'

    const supabase = createClient(
        'https://ydbulmagtgihrxxxqsmx.supabase.co',
        'sb_publishable_vZOuRgZG51J0vWzfdXQkvQ_EifaEX3J'
    )

    const tbody = document.getElementById('data-pendaftar')

    async function loadData() {

        const { data, error } = await supabase
            .from('pe')
            .select('*')
            .order('NIS', { ascending: false })

        if (error) {

            tbody.innerHTML = `
            <tr>
                <td colspan="9" style="text-align:center;padding:30px;">
                    ${error.message}
                </td>
            </tr>
            `
            return
        }

        if (!data || data.length === 0) {

            tbody.innerHTML = `
            <tr>
                <td colspan="9" style="text-align:center;font-weight:600;padding:30px;">
                    Belum ada pendaftar yang mengirimkan data.
                </td>
            </tr>
            `
            return
        }

        tbody.innerHTML = ''

        data.forEach(row => {

            tbody.innerHTML += `
            <tr>

                <td><strong>${row.NIS ?? ''}</strong></td>
                <td>${row.NAMA ?? ''}</td>
                <td>${row.KELAS ?? ''}</td>
                <td>${row.JK ?? ''}</td>
                <td>${row.TTL ?? ''}</td>
                <td>${row["NO WA"] ?? ''}</td>
                <td>${row.ALAMAT ?? ''}</td>
                <td>${row.MOTIVASI ?? ''}</td>

                <td style="white-space: nowrap;">

                    <a href="edit.php?nis=${row.NIS}"
                       class="btn-action btn-edit">
                        Edit
                    </a>

                    <a href="#"
                       class="btn-action btn-delete"
                       onclick="hapusData('${row.NIS}')">
                        Hapus
                    </a>

                </td>

            </tr>
            `
        })
    }

    window.hapusData = async function(nis) {

        if (!confirm('Yakin ingin menghapus data siswa ini?')) {
            return
        }

        const { error } = await supabase
            .from('pe')
            .delete()
            .eq('NIS', nis)

        if (error) {

            alert('Gagal menghapus: ' + error.message)

        } else {

            alert('Data berhasil dihapus!')
            loadData()

        }
    }

    loadData()

    </script>
<script src="script.js">
    </script>

</body>
</html>