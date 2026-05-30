<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PASSUS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="login-card">

    <div class="logo">
        <img src="pkl.png" alt="Logo Kab">
        <img src="skensa.png" alt="Logo Sekolah">

        <h2>PASSUS SKENSA</h2>
        <p>Panel Administrasi</p>
    </div>

    <div id="errorMsg" class="error-msg" style="display:none;"></div>

    <form id="loginForm">

        <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" required placeholder="Masukkan username" autofocus>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" required placeholder="Masukkan password">
        </div>

        <button type="submit" class="btn-login">
            Masuk ke Admin
        </button>

    </form>

    <div class="footer-login">
        &copy; <?php echo date('Y'); ?> PASSUS Indonesia
    </div>

</div>

<script>
const form = document.getElementById("loginForm")
const errorMsg = document.getElementById("errorMsg")

form.addEventListener("submit", function(e) {
    e.preventDefault()

    const username = document.getElementById("username").value
    const password = document.getElementById("password").value

    // USERNAME & PASSWORD ADMIN
    if(username === "admin" && password === "passus123") {

        // simpan status login
        sessionStorage.setItem("adminLogin", "true")

        // pindah halaman
        window.location.href = "admin.php"

    } else {

        errorMsg.style.display = "block"
        errorMsg.innerHTML = "Username atau password salah!"

    }
})
</script>

</body>
</html>