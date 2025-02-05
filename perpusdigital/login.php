<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Perpustakaan Digital</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <div class="login-container">
    <img src="asset/img/login1.jpg">
        <form action="admin/dashboard.php" method="POST" class="login-form">
        <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Masukkan username">
            </div>
                    <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password">
            </div>
            <div class="button-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <p class="signup-link">Belum punya akun? <a href="index.php">Daftar disini</a></p>
    </div>
</body>
</html>
