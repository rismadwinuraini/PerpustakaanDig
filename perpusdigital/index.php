<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
  </head>
  <link rel="stylesheet" href="styles.css">
  <body>
  <div class="container">
    <div class="content">
            <div class="row">
                <div class="col">
                <img src="asset/img/login1.jpg">
                    <h2>Selamat Datang!</h2>
                <form action="admin/dashboard.php" method="post">
                <div class="input-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="namalengkap" name="namalengkap" required placeholder="Masukkan nama lengkap">
            </div>
                <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username">
            </div>
                    <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password">
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Masukkan email">
            </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
                <p class="mt-3">Sudah memiliki akun. Masuk <a href="login.php" class="btn btn-warning">Disini</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>