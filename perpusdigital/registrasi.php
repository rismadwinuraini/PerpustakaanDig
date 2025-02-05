<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container1">
        <h2>Registrasi Akun</h2>
        <form action="login.php" method="POST" class="register-form">
            <div class="input-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="namalengkap" name="namalengkap" required placeholder="Masukkan nama lengkap">
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Masukkan username">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Masukkan email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password">
            </div>

            <div class="button-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
        <p class="login-link">Sudah punya akun? <a href="login.php">Masuk disini</a></p>
    </div>
</body>
</html>
